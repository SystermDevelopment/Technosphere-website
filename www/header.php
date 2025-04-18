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
                <li><a href="./#service">SERVICE</a></li>  
                <li><a href="./#message">MESSAGE</a></li>
                <li><a href="./#company">COMPANY</a></li>  
                <li><a href="https://en-gage.net/technosphere_saiyo" target="_blank">RECRUIT<i class="fa-regular fa-window-restore"></i></a></li>  
                <li><a href="contact">CONTACT</a></li>  
                <li> <a href="https://www.facebook.com/technosphere.co.ltd" target="_blank" rel="noopener"> <i class="fab fa-facebook-square" aria-label="Facebook"></i> </a> </li> 
  </ul>
        </div>
    </nav>
</header>
