<?php
// 変数が未定義ならデフォルトをセット
if (!isset($page_title)) {
    $page_title = '株式会社テクノスフィア';
}
if (!isset($page_desc)) {
    $page_desc = '大阪発のシステム開発会社テクノスフィア。AI・画像認識・RAG チャットボットなど幅広く支援します。';
}
?>
<header class="header">
    <a href="./">
        <img src="assets/img/common/logo_header.svg" alt="ロゴ：株式会社テクノスフィア">
    </a>

    <div class="hamburger-btn">
        <span></span><span></span><span></span>
    </div>
    <nav class="g-nav">
        <div class="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
            <ul>
                <li><a href="./#message">メッセージ</a></li>
                <li><a href="./#service">事業案内</a></li>
                <li><a href="./#achievements">実績</a></li>
                <li><a href="./#company">会社概要</a></li>
                <li><a href="./#news">新着情報</a></li>
                <li><a href="https://en-gage.net/technosphere_saiyo" target="_blank">採用情報<i class="fa-regular fa-window-restore"></i></a></li>
                <li><a href="contact">お問い合わせ</a></li>  
                <li> <a href="https://www.facebook.com/technosphere.co.ltd" target="_blank" rel="noopener"> <i class="fab fa-facebook-square" aria-label="Facebook"></i> </a> </li> 
                <li><a href="https://x.com/technosphere_co" target="_blank" rel="noopener"> <i class="fab fa-x-twitter" aria-label="X（旧Twitter）"></i> </a> </li>
                <li><a href="https://www.instagram.com/technosphere_co/" target="_blank" rel="noopener"> <i class="fab fa-instagram" aria-label="Instagram"></i> </a> </li>  
                <li class="menu-env-status">
                    オフィス環境：<br><span id="menu-status-icon">🔄</span>
                </li>  
            </ul>
        </div>
    </nav>
</header>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T2H6SF3ECT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-T2H6SF3ECT');
</script>

<!-- 設定ファイルを先に読み込む -->
<script src="assets/js/raspi-config.js"></script>

<!-- env-statusのJavaScriptを読み込む -->
<script src="assets/js/env-status.js"></script>