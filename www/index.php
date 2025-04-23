<?php
$page_title = 'AI × 画像認識で業務効率化｜株式会社テクノスフィア';
$page_desc  = '大阪発のシステム開発会社テクノスフィアは、画像認識・RAG チャットボット・エッジ AI まで一貫対応。要件定義から運用までワンストップで支援します。';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <style>body { visibility: hidden; }</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社テクノスフィア</title>
    <meta name="description" content="株式会社テクノスフィアは大阪府を拠点に活動しているシステム開発の会社です。組込制御ソフトからwebシステムやERPなどの業務系アプリケーションなどcloudやインフラなどトータルで開発から保守運用までサポートする企業です。">
    <link rel="shortcut icon" href="assets/img/common/favicon.ico" type="image/x-icon">
    <!-- 最適化 -->
    <link rel="canonical" href="https://technosphere.co.jp">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- css  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome 6.5.1 -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <!-- js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://kit.fontawesome.com/a72af8db61.js" crossorigin="anonymous"></script>
    <!-- tsParticles 本体 & プリセット -->
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@3/tsparticles.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/preset-links@3/tsparticles.preset.links.min.js" defer></script>
</head>
<body>
    <!-- パーティクル背景 -->
    <div id="tsparticles"></div>
    <!-- header -->
    <?php require_once("header.php"); ?>

    <main>
        <!-- メインビジュアル -->
        <div class="mv-wrap">
            <div class="mv">
                <h1 class="mv-txtbox">
                    <span class="entit-box">
                        <span class="mvtit-en fadeUp delay01">Transforming Operations</span>
                        <span class="mvtit-en fadeUp delay02">with AI Solutions</span>
                    </span>
                    <span class="mvtit-ja fadeUp delay03">画像認識 × RAG × エッジAIで業務革新を</span>
                </h1>
                <img src="assets/img/illust/illust_service02.svg" class="fadeUp delay04" alt="AI技術イラスト" style="max-width: 40%; margin-top: 20px;">
            </div>
        </div>

        <!-- 注力ソリューションセクション -->
        <section class="pt-l pb-l" id="solutions">
            <div class="s-container">
                <h2 class="sectit-box fadeUp">注力ソリューション</h2>
                <div class="card-box fadeUp delay01" style="display: flex; flex-wrap: wrap; gap: 2rem;">
                    <!-- カード1 -->
                    <div class="card" style="flex: 1; min-width: 250px;">
                        <img src="assets/img/illust/illust_service01.svg" alt="画像認識AI" style="width: 100%;">
                        <h3>画像認識AI</h3>
                        <p>深層学習により、虫や部品、異常をリアルタイムで検出・分類します。</p>
                    </div>
                    
                    <!-- カード2 -->
                    <div class="card" style="flex: 1; min-width: 250px;">
                        <img src="assets/img/illust/illust_service03.svg" alt="RAGチャットボット" style="width: 100%;">
                        <h3>RAGによるチャットボット</h3>
                        <p>社内ドキュメントと連携した自然言語応答型ヘルプデスクを構築。</p>
                    </div>

                    <!-- カード3 -->
                    <div class="card" style="flex: 1; min-width: 250px;">
                        <img src="assets/img/illust/illust_service05.svg" alt="IoT/エッジAI" style="width: 100%;">
                        <h3>IoT・エッジAI連携</h3>
                        <p>Jetson Orinやラズパイによるリアルタイム制御・AI推論に対応。</p>
                    </div>
                </div>
                
                <!-- AIチャットシステム特設ページバナー -->
                <section style="text-align: center; margin: 40px 0;">
                    <a href="/ai_chatbot/">
                        <img src="assets/img/banner_rag_ai_v2.png" alt="AIチャットシステム特設ページ" style="max-width: 100%; border-radius: 12px;">
                    </a>
                </section>
            </div>
        </section>

        <!-- ニュースセクション -->
        <section class="news-wrapper pt-l" id="news">
            <div class="s-container">
                <div class="sectit-box">
                    <img class="icon-news" src="assets/img/icon/icon_news.svg" alt="アイコン：お知らせ">
                    <h2>
                        <span class="sectit-en">NEWS</span>
                        <span class="sectit-ja">お知らせ</span>
                    </h2>
                </div>
                <div class="news-list fadeUpTrigger">
                    <!-- ニュース項目1 -->
                    <div class="news-item">
                        <time class="news-date" datetime="2025-04-12">2025.04.12</time>
                        <p class="news-txt">サイトをリニューアルしました。AIソリューションや導入実績を中心に構成を刷新しました。</p>
                    </div>
                    
                    <!-- ニュース項目2 -->
                    <div class="news-item">
                        <time class="news-date" datetime="2025-02-12">2025.02.12</time>
                        <p class="news-txt">採用ページをリニューアルしました！</p>
                    </div>
                    
                    <!-- ニュース項目3 -->
                    <div class="news-item">
                        <time class="news-date" datetime="2023-10-24">2023.10.24</time>
                        <p class="news-txt">
                            会社のロゴとWebサイトをリニューアルしました！<br>
                            今後とも株式会社テクノスフィアをよろしくお願いいたします。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 事業内容セクション -->
        <section class="service-wrapper pt-l" id="service">
            <div class="container">
                <div class="sectit-box fadeUpTrigger">
                    <img class="icon-service" src="assets/img/icon/icon_service.svg" alt="アイコン：事業内容">
                    <h2>
                        <span class="sectit-en">SERVICE</span>
                        <span class="sectit-ja">事業内容</span>
                    </h2>
                </div>
                
                <div class="service-box">
                    <!-- サービス項目1: AIソリューション -->
                    <article class="service-item">
                        <div class="service-intro fadeUpTrigger">
                            <div class="intro-imgbox">
                                <img src="assets/img/illust/illust_service05.svg" alt="イラスト：AIソリューション">
                            </div>
                            <div class="intro-txtbox">
                                <p class="intro-num">SERVICE 01</p>
                                <h3 class="intro-tit">AIソリューション</h3>
                                <p class="intro-txt">
                                    ディープラーニングによる画像認識、RAGによるチャット支援、IoT×エッジAIなど、
                                    最新技術を活用した業務自動化ソリューションを展開しています。
                                </p>
                            </div>
                        </div>
                        <div class="service-result fadeUpTrigger">
                            <p class="result-tit">実績</p>
                            <ul>
                                <li><span>食品工場向け：AIによる異物混入検出。コンベア上での異物（虫、繊維、破片など）を高速検出し、省人化と品質維持を実現。</span></li>
                                <li><span>自治体向け：RAG構成で内部文書を即時検索・応答するAIチャットボットを構築。住民対応の効率化に寄与。</span></li>
                                <li><span>農業分野：ラズパイ＋カメラで害虫をリアルタイム検出。種別分類・発生通知・自動散布判断を現場で処理。</span></li>
                                <li><span>精密部品工場：画像検査による打痕や微細キズを検出するディープラーニングモデルを開発・導入。</span></li>
                                <li><span>トマト選別装置：熟度を判定し自動分類。カメラ＋エッジAIで完結するスマート農業ソリューション。</span></li>
                            </ul>
                            <!-- 画像ギャラリー -->
                            <div class="result-pictures" style="display: flex; flex-wrap: nowrap; gap: 1rem; overflow-x: auto;">
                                <img src="assets/img/case_food_ai.png" alt="異物検出AI" style="width: 200px;">
                                <img src="assets/img/case_chatbot_ai.png" alt="生成AIチャットボット" style="width: 200px;">
                                <img src="assets/img/case_insect_ai.png" alt="害虫検出AI" style="width: 200px;">
                                <img src="assets/img/case_machine_ai.png" alt="打痕検出AI" style="width: 200px;">
                                <img src="assets/img/case_tomato_ai.png" alt="トマト選別AI" style="width: 200px;">
                            </div>
                        </div>
                    </article>
                    
                    <!-- サービス項目2: 組込系システム -->
                    <article class="service-item">
                        <div class="service-intro f-reverse fadeUpTrigger">
                            <div class="intro-imgbox">
                                <img src="assets/img/illust/illust_service01.svg" alt="イラスト：組込系システム">
                            </div>
                            <div class="intro-txtbox">
                                <p class="intro-num">SERVICE 02</p>
                                <h3 class="intro-tit">組込系システム</h3>
                                <p class="intro-para">⼯場のライン制御システムから重機の制御システム・⼩型装置のマイコン制御まで、製造⼯場のDX化をご提案いたします。</p>
                            </div>
                        </div>
                        <div class="service-result fadeUpTrigger">
                            <p class="result-tit">実績</p>
                            <ul>
                                <li><span>建設重機に搭載したGPSの位置情報により⼯事の⾃動化を実現するアプリケーションの開発</span></li>
                                <li><span>⼯事⾏程をリアルタイムに管理するためのアプリケーション開発</span></li>
                                <li><span>製品開発に向けた試作機開発、STMicro/Renesas/TI/Qualcommチップのペリフェラルから各デバイス制御</span></li>
                            </ul>
                            <div class="result-pictures">
                                <img src="assets/img/built-in01.jpg" alt="組み込みシステム：実績写真1">
                                <img src="assets/img/built-in02.jpg" alt="組み込みシステム：実績写真2">
                                <img src="assets/img/built-in03.jpg" alt="組み込みシステム：実績写真3">
                            </div>
                        </div>
                    </article>
                    
                    <!-- サービス項目3: 画像処理 -->
                    <article class="service-item">
                        <div class="service-intro f-reverse fadeUpTrigger">
                            <div class="intro-imgbox">
                                <img src="assets/img/illust/illust_service02.svg" alt="イラスト：画像処理">
                            </div>
                            <div class="intro-txtbox">
                                <p class="intro-num">SERVICE 03</p>
                                <h3 class="intro-tit">画像処理</h3>
                                <p class="intro-para">製品の完成検査から画像識別、バーコードの複数同時読み取りから⽂字認識などの画像処理分野であらゆる処理実績があります。機械学習からディープラーニング技術などの様々なノウハウを有し それらを組み合わせてご要望に応じて適切なソリューションをご提案いたします。</p>
                            </div>
                        </div>
                        <div class="service-result fadeUpTrigger">
                            <p class="result-tit">実績</p>
                            <ul>
                                <li><span>品質検査⼯程でのネジ山の打痕検査や製品の傷、ペイントムラ検出の品質検査システム</span></li>
                                <li><span>各フレームで人物やもののオブジェクトを追い続けるトラッキングシステム</span></li>
                                <li><span>映像コンテンツのエンコード・デコード</span></li>
                                <li><span>歩行データ計測システム（FORXAI）</span></li>
                            </ul>
                            <div class="result-pictures">
                                <img src="assets/img/graphic01.jpg" alt="画像処理：実績写真1">
                                <img src="assets/img/graphic02.jpg" alt="画像処理：実績写真2">
                                <img src="assets/img/graphic03.jpg" alt="画像処理：実績写真3">
                            </div>
                        </div>
                    </article>
                    
                    <!-- サービス項目4: WEB系システム -->
                    <article class="service-item">
                        <div class="service-intro fadeUpTrigger">
                            <div class="intro-imgbox">
                                <img src="assets/img/illust/illust_service03.svg" alt="イラスト：WEB系システム">
                            </div>
                            <div class="intro-txtbox">
                                <p class="intro-num">SERVICE 04</p>
                                <h3 class="intro-tit">WEB系システム</h3>
                                <p class="intro-para">社内向けグループウェアからコンシューマー向けECサイトや予約システムなど、お客様のご要望に合わせたWEBシステムを開発いたします。</p>
                            </div>
                        </div>
                        <div class="service-result fadeUpTrigger">
                            <p class="result-tit">実績</p>
                            <ul>
                                <li><span>診療予約システム</span></li>
                                <li><span>保守情報管理システム</span></li>
                                <li><span>受発注管理システム</span></li>
                            </ul>
                            <div class="result-pictures">
                                <img src="assets/img/web01.jpg" alt="WEB系システム：実績写真1">
                                <img src="assets/img/web02.jpg" alt="WEB系システム：実績写真2">
                                <img src="assets/img/web03.jpg" alt="WEB系システム：実績写真3">
                            </div>
                        </div>
                    </article>
                    
                    <!-- サービス項目5: スマホアプリ開発 -->
                    <article class="service-item">
                        <div class="service-intro f-reverse fadeUpTrigger">
                            <div class="intro-imgbox">
                                <img src="assets/img/illust/illust_service04.svg" alt="イラスト：スマホアプリ開発">
                            </div>
                            <div class="intro-txtbox">
                                <p class="intro-num">SERVICE 05</p>
                                <h3 class="intro-tit">スマホアプリ開発</h3>
                                <p class="intro-para">就活セミナー様向け情報配信アプリやセミナー予約アプリ診療予約アプリなどAndroid/iPhoneどちらのアプリケーション共通化して開発致します。</p>
                            </div>
                        </div>
                        <div class="service-result fadeUpTrigger">
                            <p class="result-tit">実績</p>
                            <ul>
                                <li><span>合同企業説明会・セミナー予約管理アプリ</span></li>
                                <li><span>倉庫の商品所在管理システム</span></li>
                            </ul>
                            <div class="result-pictures">
                                <img src="assets/img/smartphone01.jpg" alt="スマホアプリ開発：実績写真1">
                            </div>
                        </div>
                    </article>
                    
                    <!-- サービス項目6: インフラ構築 -->
                    <article class="service-item">
                        <div class="service-intro fadeUpTrigger">
                            <div class="intro-imgbox">
                                <img src="assets/img/illust/illust_service05.svg" alt="イラスト：インフラ構築">
                            </div>
                            <div class="intro-txtbox">
                                <p class="intro-num">SERVICE 06</p>
                                <h3 class="intro-tit">インフラ構築</h3>
                                <p class="intro-para">社内サーバからAWSなどを含むクラウドまで各規模に応じてご提案致します。設計・構築から保守運⽤まで、各社さまにオーダーメイドの対応が可能です。</p>
                            </div>
                        </div>
                        <div class="service-result fadeUpTrigger">
                            <p class="result-tit">実績</p>
                            <ul>
                                <li><span>コアネットワーク企画・設計</span></li>
                                <li><span>社外向けwebサーバ構築からリモートVPN接続</span></li>
                                <li><span>環境の整メールサーバやグループウェアの構築</span></li>
                                <li><span>AWS/Azure/GCPによるｗｅｂアプリケーション環境構築</span></li>
                            </ul>
                            <div class="result-pictures">
                                <img src="assets/img/infrastructure01.jpg" alt="インフラ構築：実績写真1">
                                <img src="assets/img/infrastructure02.jpg" alt="インフラ構築：実績写真2">
                                <img src="assets/img/infrastructure03.jpg" alt="インフラ構築：実績写真3">
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- パートナーセクション -->
        <section class="partner-wrapper pt-l fadeUpTrigger" id="partner">
            <div class="s-container">
                <div class="sectit-box">
                    <img class="icon-partner" src="assets/img/icon/icon_partner.svg" alt="アイコン：パートナー">
                    <h2>
                        <span class="sectit-en">PARTNER</span>
                        <span class="sectit-ja">パートナー</span>
                    </h2>
                </div>
                <div class="container-txtbox">
                    <p>弊社はコニカミノルタ社FORXAIのソリューションパートナーとしてともに企画開発販売していく企業としてミッションを担っております。</p>
                    <div class="container-link">
                        <a class="partner-logo" href="https://forxai.konicaminolta.com/" target="_blank">
                            <img src="assets/img/logo_forxai.png" alt="ロゴ：forxai">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- メッセージセクション -->
        <section class="message-wrapper pt-l fadeUpTrigger" id="message">
            <div class="container">
                <div class="message-box">
                    <div class="sectit-box">
                        <img class="icon-message" src="assets/img/icon/icon_message.svg" alt="アイコン：メッセージ">
                        <h2>
                            <span class="sectit-en">MESSAGE</span>
                            <span class="sectit-ja">メッセージ</span>
                        </h2>
                    </div>
                    <div class="message-txtbox">
                        <p>未来にある便利で快適な暮らしを、<span class="d-inb">テクノロジーで支えたい</span></p>
                        <p>
                            私たちがご提供するシステムは、産業の基盤となる汎用的なものから、技術に特化したもの、さらには様々なテクノロジーを組み合わせて実現する複雑なものなど分野を問わず多岐にわたります。<br>
                            技術に誇りを持って、お客様には想像をはるかに超える満足をお届けいたします。<br><br>
                            サービス内容や機能、やりたいことが実現できるか？などご相談承っております。<br>
                            ぜひお気軽にお問合せください。
                        </p>
                    </div>
                    <div class="btn-box">
                        <a href="contact" class="btn m-auto"><span>CONTACT</span></a>
                    </div>       
                </div>
            </div>
        </section>

        <!-- 会社概要セクション -->
        <section class="company-wrapper pt-l ptb-l fadeUpTrigger" id="company">
            <div class="s-container">
                <div class="sectit-box">
                    <img class="icon-company" src="assets/img/icon/icon_company.svg" alt="アイコン：会社概要">
                    <h2>
                        <span class="sectit-en">COMPANY</span>
                        <span class="sectit-ja">会社概要</span>
                    </h2>
                </div>
                <div class="company-list">
                    <dl class="company-item">
                        <dt>会社名</dt>
                        <dd>株式会社テクノスフィア</dd>
                    </dl>
                    <dl class="company-item">
                        <dt>代表者</dt>
                        <dd>小山 訓弘</dd>
                    </dl>
                    <dl class="company-item">
                        <dt>所在地</dt>
                        <dd>〒532-0011<br>
                            大阪市淀川区西中島7-7-3 <span class="d-inb">エフベースミュゼオ201</span>
                        </dd>
                    </dl>
                    <dl class="company-item">
                        <dt>連絡先</dt>
                        <dd>
                            TEL ：(06)4805-8282<br>
                            FAX ：(06)4805-8283<br>
                            E-mail：info@technosphere.co.jp<br>
                            URL：https://technosphere.co.jp
                        </dd>
                    </dl>
                    <dl class="company-item">
                        <dt>設立</dt>
                        <dd>2021年7月21日</dd>
                    </dl>
                    <dl class="company-item">
                        <dt>資本金</dt>
                        <dd>10,000,000円</dd>
                    </dl>
                    <dl class="company-item">
                        <dt>事業内容</dt>
                        <dd>
                            ＡＩ系システム開発<br>
                            組込制御系システム開発<br>
                            画像検査開発<br>
                            WEB系システム開発<br>
                            スマホアプリ開発<br>
                            インフラ構築
                        </dd>
                    </dl>
                    <dl class="company-item">
                        <dt>顧問弁護士</dt>
                        <dd>齋藤 靖之</dd>
                    </dl>
                    <dl class="company-item">
                        <dt>加盟団体</dt>
                        <dd>
                            大阪商工会議所<br>
                            NPO法人M2M・IoT研究会
                        </dd>
                    </dl>
                    <dl class="company-item">
                        <dt>主要取引先</dt>
                        <dd>
                            株式会社J-CT<br>
                            日本マイクロシステムズ株式会社<br>
                            株式会社SOAシステムビジネス<br>
                            株式会社プリバテック
                        </dd>
                    </dl>
                </div>
            </div>
        </section>

        <!-- AIソリューション事業セクション -->
        <section class="pt-l pb-l" id="business-ai">
            <div class="s-container">
                <h2 class="sectit-box fadeUp">AIソリューション事業</h2>
                <p class="fadeUp delay01">当社では、最先端のAI技術を活用し、さまざまな業界の課題解決に取り組んでいます。</p>

                <div class="card-box fadeUp delay02" style="display: flex; flex-wrap: wrap; gap: 2rem; margin-top: 2rem;">
                    <!-- AIソリューションカード1 -->
                    <div class="card" style="flex: 1; min-width: 280px;">
                        <img src="assets/img/illust/illust_service01.svg" alt="異物検出AI">
                        <h3>食品工場向け：異物混入検出AI</h3>
                        <p>ベルトコンベア上の異物（虫、金属片など）を高速に検出。人の目を超える精度で品質管理を自動化。</p>
                    </div>

                    <!-- AIソリューションカード2 -->
                    <div class="card" style="flex: 1; min-width: 280px;">
                        <img src="assets/img/illust/illust_service03.svg" alt="チャットボット支援">
                        <h3>自治体向け：生成AIチャットボット</h3>
                        <p>RAGを活用し、内部FAQ・PDF・マニュアルから即時回答。住民対応を自動化し、窓口の負担を大幅削減。</p>
                    </div>

                    <!-- AIソリューションカード3 -->
                    <div class="card" style="flex: 1; min-width: 280px;">
                        <img src="assets/img/illust/illust_service05.svg" alt="エッジAI制御">
                        <h3>農業IoT：害虫検出×ラズパイ</h3>
                        <p>ラズパイとカメラによるリアルタイム害虫検出。エッジ側でAI推論を実行し、散布指示まで自動化。</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- フッター -->
    <?php require_once("footer.php"); ?>

    <!-- JS -->
    <script>
     window.addEventListener("load", () => {
        tsParticles.load("tsparticles", {
          preset: "links",
          background: { color: "#000" },           // 必要なら無地背景
          particles: {
            color: { value: ["#00B4FF", "#A4FF00"]},
            move: { enable: true, speed: 2 },
            number: { value: 60 },
            shape: { type: "circle" }
          },
          interactivity: {
            events: { onHover: { enable: true, mode: "repulse" } }
        }
        });
      });
    </script>
    <script src="assets/js/main.js"></script>
    <!--画面の読み込みが全て完了してから表示-->
    <script>
        window.addEventListener('load', ()=> {
            document.body.style.visibility = 'visible';
        });
    </script>
</body>
</html>