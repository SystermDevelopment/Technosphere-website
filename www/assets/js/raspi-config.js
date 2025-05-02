// raspi-config.js
const poseServerUrl = 'http://pose.technosphere.co.jp/';
const proxyUrl = `/proxy.php?target=${encodeURIComponent(poseServerUrl)}`;

const ENV_CONFIG = {
    rasPiPico_apiUrl: proxyUrl,
    //rasPiPico_apiUrl: 'http://192.168.11.204/',
    national_holidays_apiUrl: `https://api.national-holidays.jp/${new Date().getFullYear()}`,
    holidays: [
        '2021-07-21', // 例:創業日と同様の形式で休業日を入力してください
        // 臨時休業日をここに追加
        
    ]
};
