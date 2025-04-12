<?php
    $motourl = $_SERVER['HTTP_REFERER'];
    if (false === strpos($motourl, 'contact')) {
        // コンタクトページからの遷移でなければリダイレクト
        header("Location:./");
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社テクノスフィア</title>
    <meta name="description" content="株式会社テクノスフィアは大阪府を拠点に活動しているシステム開発の会社です。サービス内容のお問い合わせやご質問・ご相談は、当社のプライバシーポリシーに同意の上こちらのフォームよりご連絡ください。">
    <link rel="shortcut icon" href="assets/img/common/favicon.ico" type="image/x-icon">
    <!-- 最適化 -->
    <link rel="canonical" href="https://technosphere.co.jp/contact">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- css  -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://kit.fontawesome.com/a72af8db61.js" crossorigin="anonymous"></script>
</head>
<body class="firstLoadTrigger">
    <!-- header -->
    <?php require_once("header.php"); ?>

    <main>
        <div class="lower-mv">
            <h1>THANKS</h1>
        </div>
        <div class="container">
            <p class="txt-cent">お問い合わせありがとうございました。</p>
            <p class="txt-cent">お送り頂きました内容を確認の上、担当者から折り返しご連絡させて頂きます。</p>
            <div class="btn-box">
                <a href="./" class="btn m-auto"><span>TOP</span></a>
            </div>   
        </div>

 
    </main>

    <!-- js -->
    <script src="assets/js/hamburger.js"></script>
    <script src="assets/js/fadein.js"></script>
</body>
</html>