// 温度を絵文字で表示
function getTempEmoji(temp) {
    temp = parseFloat(temp);
    if (temp >= 28) return '🥵';
    else if (temp >= 25) return '😅';
    else if (temp >= 20) return '😌';
    else if (temp >= 17) return '🙂';
    else return '🥶';
}

// 湿度を絵文字で表示
function getHumidEmoji(humid) {
    humid = parseFloat(humid);
    if (humid >= 80) return '💦';
    else if (humid >= 65) return '💧';
    else if (humid >= 40) return '😊';
    else if (humid >= 30) return '🍂';
    else return '🌵';
}

//祝日を自動で取得する関数
async function fetchHolidays() {
    const response = await fetch(ENV_CONFIG.national_holidays_apiUrl);
    if (!response.ok) throw new Error('祝日データ取得失敗');
    const holidays = await response.json();
    return holidays.map(day => day.date);
}

//初期化（即時実行関数で起動時に自動実行）
(async function initializeHolidays() {
    try {
        const apiHolidays = await fetchHolidays();

        // ★ 元の手動指定の臨時休業日を残しつつ、APIの祝日をマージ
        ENV_CONFIG.holidays = Array.from(new Set([...ENV_CONFIG.holidays, ...apiHolidays]));
    } catch (err) {
        console.error('祝日取得エラー:', err);
        ENV_CONFIG.holidays = [];
    }
    // ★ 祝日データ取得後に表示を更新する
    await updateComfortStatus();
})();


// 営業時間かどうか判定する関数
function checkBusinessStatus() {
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0');
    const day = String(now.getDate()).padStart(2, '0');
    const today = `${year}-${month}-${day}`;
    const dayOfWeek = now.getDay();
    const hour = now.getHours();

    // raspi-config.jsに記載の休日、土日の場合は休業日
    if (ENV_CONFIG.holidays.includes(today) || dayOfWeek === 0 || dayOfWeek === 6) {
        return 'holiday';
    }
    // 営業時間外(9時～18時以外)
    if (hour < 9 || hour >= 18) {
        return 'closed';
    }
    // 営業中(平日、9時～18時)
    return 'open';
}

// 表示更新処理（設定ファイル利用）
async function updateComfortStatus() {
    const statusIcon = document.getElementById('status-icon');
    const menuStatusIcon = document.getElementById('menu-status-icon');
    const businessStatus = checkBusinessStatus();

    if (businessStatus === 'holiday') {
        const holidayText = '休業日';
        if (statusIcon) statusIcon.textContent = holidayText;
        if (menuStatusIcon) menuStatusIcon.textContent = holidayText;
        console.log(holidayText);
        return;
    }

    if (businessStatus === 'closed') { 
        const closedText = '営業時間外';
        if (statusIcon) statusIcon.textContent = closedText;
        if (menuStatusIcon) menuStatusIcon.textContent = closedText;
        console.log(closedText);
        return;
    }

    try {
        const res = await fetch(ENV_CONFIG.rasPiPico_apiUrl);
        const data = await res.json();

        const temp = data.temperature.replace('C', '');
        const humid = data.humidity.replace('%', '');

        const tempIcon = getTempEmoji(temp);
        const humidIcon = getHumidEmoji(humid);

        const displayText = `温度${tempIcon} / 湿度${humidIcon}`;

        if (statusIcon) statusIcon.textContent = displayText;
        if (menuStatusIcon) menuStatusIcon.textContent = displayText;

        console.log(`表示内容: ${displayText}（温度:${temp}℃ 湿度:${humid}%）`);

    } catch (err) {
        console.error('データ取得エラー:', err);
        const errorText = '⚠️データ取得エラー';
        if (statusIcon) statusIcon.textContent = errorText;
        if (menuStatusIcon) menuStatusIcon.textContent = errorText;
    }
}

// 更新間隔
setInterval(updateComfortStatus, 600000); // 本番環境：10分
