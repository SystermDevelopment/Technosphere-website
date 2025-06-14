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
    <!-- tsParticles v3 最新版CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/engine@3/tsparticles.engine.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tsparticles/preset-links@3/tsparticles.preset.links.min.js"></script>
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
                    <style>
                        .mvtit-en {
                            white-space: nowrap;
                        }
                        @media (max-width: 1200px) {
                            .mvtit-en {
                                font-size: 2.5rem !important;
                            }
                        }
                        @media (max-width: 992px) {
                            .mvtit-en {
                                font-size: 2rem !important;
                            }
                        }
                        @media (max-width: 768px) {
                            .mv-txtbox {
                                padding: 0 20px;
                            }
                            .mvtit-en {
                                font-size: 1.5rem !important;
                                white-space: normal !important;
                                line-height: 1.4 !important;
                            }
                            .mvtit-ja {
                                font-size: 0.9rem !important;
                                line-height: 1.5 !important;
                                margin-top: 10px !important;
                            }
                        }
                        @media (max-width: 576px) {
                            .mvtit-en {
                                font-size: 1.2rem !important;
                            }
                            .mvtit-ja {
                                font-size: 0.85rem !important;
                            }
                        }
                        @media (max-width: 480px) {
                            .mvtit-en {
                                font-size: 1rem !important;
                            }
                            .mvtit-ja {
                                font-size: 0.8rem !important;
                            }
                        }
                    </style>
                    <span class="entit-box">
                        <span class="mvtit-en fadeUp delay01" style="color: rgb(63,151,209);">AI技術で、人と社会をスムーズにつなぐ</span>
                    </span>
                    <span class="mvtit-ja fadeUp delay03" style="display: block; text-align: center;">未来にある便利で快適な暮らしを、テクノロジーで支えたい</span>
                </h1>
            </div>
        </div>

        <!-- メッセージセクション -->
        <section class="pt-l fadeUpTrigger" id="message">
            <div class="container">
                <div class="sectit-box">
                    <h2>
                        <span class="sectit-en">メッセージ</span>
                        <span class="sectit-ja">Message</span>
                    </h2>
                </div>
                <div class="message-txtbox">
                    <p>お客様の声を聴き、<span class="d-inb">最適なAIやシステムをカタチにします。</span></p>
                    <p>
                        私たちがご提供するシステムは、産業の基盤となる汎用的なものから、技術に特化したもの、<br>
                        さらには様々なテクノロジーを組み合わせて実現する複雑なものなど分野を問わず多岐にわたります。<br><br>
                        ITを取り巻く環境は、目まぐるしく変化しています。<br>
                        私たちは技術革新においても、常に成長し続けることをお約束いたします。<br><br>
                        技術に誇りを持って、お客様には想像をはるかに超える満足をお届けいたします。<br><br>
                        サービス内容や機能、やりたいことが実現できるか？などご相談承っております。<br>
                        ぜひお気軽にお問合せください。
                    </p>
                </div>
            </div>
        </section>

        <!-- 事業案内セクション -->
        <section class="pt-l pb-l" id="service" style="background: #f9f9f9;">
            <div class="container">
                <div class="sectit-box">
                    <h2>
                        <span class="sectit-en">事業案内</span>
                        <span class="sectit-ja">Service</span>
                    </h2>
                </div>
                <p class="fadeUp delay01" style="text-align: center; margin-bottom: 40px;">私たちが対応できる開発分野をご紹介します。</p>
                
                <!-- AIソリューション -->
                <div class="ai-solution-card fadeUp delay02" style="background: white; padding: 40px; border-radius: 10px; margin-bottom: 40px; max-width: 1200px; margin-left: auto; margin-right: auto; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <div style="display: flex; align-items: center; gap: 40px; flex-wrap: wrap;">
                        <div style="flex: 0 0 auto;">
                            <img src="assets/img/illust/illust_service05.svg" alt="AIソリューション" style="width: 100px; height: 100px;">
                        </div>
                        <div style="flex: 1; min-width: 300px;">
                            <h3 style="color: #333; margin-bottom: 15px; font-size: 24px;">AIソリューション</h3>
                            <p style="font-size: 16px; line-height: 1.8; margin-bottom: 20px; color: #666;">
                                ディープラーニングによる画像認識、RAGによるチャット支援、IoT×エッジAIなど、最新技術を活用した業務自動化ソリューションを展開しています。
                            </p>
                            <div style="display: flex; flex-wrap: wrap; gap: 20px; font-size: 14px;">
                                <span style="background: #f0f0f0; color: #333; padding: 5px 15px; border-radius: 20px;">画像認識AI</span>
                                <span style="background: #f0f0f0; color: #333; padding: 5px 15px; border-radius: 20px;">RAGチャットボット</span>
                                <span style="background: #f0f0f0; color: #333; padding: 5px 15px; border-radius: 20px;">エッジAI</span>
                                <span style="background: #f0f0f0; color: #333; padding: 5px 15px; border-radius: 20px;">異常検知</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="service-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 30px; max-width: 1200px; margin: 0 auto;">
                    <style>
                        @media (max-width: 768px) {
                            .service-grid {
                                grid-template-columns: 1fr !important;
                            }
                        }
                    </style>
                    <!-- 組込系システム -->
                    <div class="service-card fadeUp delay02" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <div style="text-align: center; margin-bottom: 20px;">
                            <img src="assets/img/illust/illust_service01.svg" alt="組込系システム" style="width: 80px; height: 80px; margin: 0 auto; display: block;">
                        </div>
                        <h3 style="color: #333; margin-bottom: 15px; text-align: center;">組込系システム</h3>
                        <p style="font-size: 14px; line-height: 1.6;">工場のライン制御システムから重機の制御システム・小型装置のマイコン制御まで、製造工場のDX化をご提案いたします。</p>
                    </div>
                    
                    <!-- 画像処理 -->
                    <div class="service-card fadeUp delay02" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <div style="text-align: center; margin-bottom: 20px;">
                            <img src="assets/img/illust/illust_service02.svg" alt="画像処理" style="width: 80px; height: 80px; margin: 0 auto; display: block;">
                        </div>
                        <h3 style="color: #333; margin-bottom: 15px; text-align: center;">画像処理</h3>
                        <p style="font-size: 14px; line-height: 1.6;">製品の完成検査から画像識別、バーコードの複数同時読み取りから文字認識などの画像処理分野であらゆる処理実績があります。</p>
                    </div>
                    
                    <!-- WEB系システム -->
                    <div class="service-card fadeUp delay03" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <div style="text-align: center; margin-bottom: 20px;">
                            <img src="assets/img/illust/illust_service03.svg" alt="WEB系システム" style="width: 80px; height: 80px; margin: 0 auto; display: block;">
                        </div>
                        <h3 style="color: #333; margin-bottom: 15px; text-align: center;">WEB系システム</h3>
                        <p style="font-size: 14px; line-height: 1.6;">社内向けグループウェアからコンシューマー向けECサイトや予約システムなど、お客様のご要望に合わせたWEBシステムを開発いたします。</p>
                    </div>
                    
                    <!-- インフラ構築 -->
                    <div class="service-card fadeUp delay03" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <div style="text-align: center; margin-bottom: 20px;">
                            <img src="assets/img/illust/illust_service05.svg" alt="インフラ構築" style="width: 80px; height: 80px; margin: 0 auto; display: block;">
                        </div>
                        <h3 style="color: #333; margin-bottom: 15px; text-align: center;">インフラ構築</h3>
                        <p style="font-size: 14px; line-height: 1.6;">社内サーバからAWSなどを含むクラウドまで各規模に応じてご提案致します。設計・構築から保守運用まで、オーダーメイドの対応が可能です。</p>
                    </div>
                </div>
                
                <p class="fadeUp delay04" style="text-align: center; margin-top: 40px; font-size: 14px; color: #666;">
                    ※ホームページやスマホアプリの開発も可能なので、お気軽にお問い合わせください。
                </p>
            </div>
        </section>

        <!-- 実績セクション -->
        <section class="pt-l pb-l" id="achievements">
            <div class="container">
                <div class="sectit-box">
                    <h2>
                        <span class="sectit-en">実績</span>
                        <span class="sectit-ja">Achievements</span>
                    </h2>
                </div>
                <p class="fadeUp delay01" style="text-align: center; margin-bottom: 40px;">クライアントの成功を支援してきた実績をご紹介します</p>
                
                <div class="achievement-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto;">
                    <!-- 社内ヘルプデスクチャットボット -->
                    <div class="achievement-card fadeUp delay02" onclick="openPopup('chatbot')" style="background: white; border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); transition: all 0.3s;">
                        <div style="background: #2196F3; color: white; padding: 15px 20px;">
                            <h3 style="margin: 0; font-size: 18px;">社内ヘルプデスク業務支援用チャットボットシステム</h3>
                        </div>
                        <div style="padding: 20px;">
                            <p style="font-size: 14px; line-height: 1.6; margin-bottom: 15px;">業務マニュアルや仕様書、FAQなどの社内文書を元に、従業員からの問い合わせに対して適切な回答を即時に提示するAIチャットボット</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">RAG</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">LangChain</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">社内文書連携</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ネジ山打痕検査システム -->
                    <div class="achievement-card fadeUp delay02" onclick="openPopup('screw')" style="background: white; border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); transition: all 0.3s;">
                        <div style="background: #4CAF50; color: white; padding: 15px 20px;">
                            <h3 style="margin: 0; font-size: 18px;">ネジ山の打痕を自動検査する画像処理システム</h3>
                        </div>
                        <div style="padding: 20px;">
                            <p style="font-size: 14px; line-height: 1.6; margin-bottom: 15px;">人の目による検査に頼っていたネジ山の打痕検査を、カメラと画像処理によって自動化するシステム</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">画像処理</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">OpenCV</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">品質検査</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 虫の識別管理システム -->
                    <div class="achievement-card fadeUp delay03" onclick="openPopup('insect')" style="background: white; border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); transition: all 0.3s;">
                        <div style="background: #FF9800; color: white; padding: 15px 20px;">
                            <h3 style="margin: 0; font-size: 18px;">虫の識別管理システム</h3>
                        </div>
                        <div style="padding: 20px;">
                            <p style="font-size: 14px; line-height: 1.6; margin-bottom: 15px;">カメラで撮影された画像から、虫の種別を自動で識別するAIシステム。現場で撮影された虫の画像を即座に解析し、種別を特定・記録することで、防虫対策や品質管理の高度化を支援。</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">AI画像認識</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">深層学習</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">品質管理</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 組込み制御システム -->
                    <div class="achievement-card fadeUp delay03" onclick="openPopup('embedded')" style="background: white; border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); transition: all 0.3s;">
                        <div style="background: #9C27B0; color: white; padding: 15px 20px;">
                            <h3 style="margin: 0; font-size: 18px;">組込み制御システム</h3>
                        </div>
                        <div style="padding: 20px;">
                            <p style="font-size: 14px; line-height: 1.6; margin-bottom: 15px;">各種マイコンやSoCプラットフォーム（STMicroelectronics、Renesas、TI、Raspberry Pi、Jetson など）を活用し、センシング・制御を中心とした組込みシステムの開発を行っています。</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">組込開発</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">マイコン制御</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">IoT</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Web診療予約システム -->
                    <div class="achievement-card fadeUp delay04" onclick="openPopup('medical')" style="background: white; border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); transition: all 0.3s;">
                        <div style="background: #00BCD4; color: white; padding: 15px 20px;">
                            <h3 style="margin: 0; font-size: 18px;">Web診療予約システム</h3>
                        </div>
                        <div style="padding: 20px;">
                            <p style="font-size: 14px; line-height: 1.6; margin-bottom: 15px;">医療機関向け、スマートフォン・PCを活用したクラウド型診療予約システム</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">Web開発</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">クラウド</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">レスポンシブ</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- インフラ構築・運用 -->
                    <div class="achievement-card fadeUp delay04" onclick="openPopup('infra')" style="background: white; border: 1px solid #e0e0e0; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); transition: all 0.3s;">
                        <div style="background: #607D8B; color: white; padding: 15px 20px;">
                            <h3 style="margin: 0; font-size: 18px;">インフラ構築・運用</h3>
                        </div>
                        <div style="padding: 20px;">
                            <p style="font-size: 14px; line-height: 1.6; margin-bottom: 15px;">オンプレミス環境からクラウド環境（AWS、Azure、GCP）への移行支援を多数手がけています。既存システムの構成調査、アセスメントから始まり、最適なクラウドアーキテクチャの設計、環境構築、データ移行、セキュリティ対策まで、一貫した対応が可能です。</p>
                            <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">AWS</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">Azure</span>
                                <span style="background: #f0f0f0; padding: 4px 12px; border-radius: 15px; font-size: 12px;">クラウド移行</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <style>
                    .achievement-card {
                        cursor: pointer;
                    }
                    .achievement-card:hover {
                        transform: translateY(-5px);
                        box-shadow: 0 8px 20px rgba(0,0,0,0.12) !important;
                    }
                    @media (max-width: 768px) {
                        .achievement-grid {
                            grid-template-columns: 1fr !important;
                        }
                    }
                    
                    /* ポップアップスタイル */
                    .popup-overlay {
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: rgba(0, 0, 0, 0.7);
                        display: none;
                        align-items: center;
                        justify-content: center;
                        z-index: 9999;
                        padding: 20px;
                    }
                    
                    .popup-content {
                        background: white;
                        max-width: 800px;
                        width: 100%;
                        max-height: 90vh;
                        overflow-y: auto;
                        border-radius: 10px;
                        position: relative;
                    }
                    
                    .popup-close {
                        position: absolute;
                        top: 15px;
                        right: 15px;
                        width: 30px;
                        height: 30px;
                        background: #333;
                        color: white;
                        border: none;
                        border-radius: 50%;
                        cursor: pointer;
                        font-size: 20px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        z-index: 1;
                    }
                    
                    .popup-close:hover {
                        background: #555;
                    }
                    
                    .popup-image {
                        width: 100%;
                        height: 300px;
                        object-fit: cover;
                        border-radius: 10px 10px 0 0;
                    }
                    
                    .popup-body {
                        padding: 30px;
                    }
                    
                    .popup-title {
                        font-size: 24px;
                        font-weight: bold;
                        margin-bottom: 20px;
                        color: #333;
                    }
                    
                    .popup-text {
                        font-size: 16px;
                        line-height: 1.8;
                        color: #666;
                        white-space: pre-wrap;
                    }
                    
                    @media (max-width: 768px) {
                        .popup-body {
                            padding: 20px;
                        }
                        .popup-title {
                            font-size: 20px;
                        }
                        .popup-text {
                            font-size: 14px;
                        }
                    }
                </style>
                
                <!-- ポップアップ要素 -->
                <div class="popup-overlay" id="achievementPopup">
                    <div class="popup-content">
                        <button class="popup-close" onclick="closePopup()">&times;</button>
                        <img src="" alt="" class="popup-image" id="popupImage">
                        <div class="popup-body">
                            <h3 class="popup-title" id="popupTitle"></h3>
                            <p class="popup-text" id="popupText"></p>
                        </div>
                    </div>
                </div>
                
                <script>
                    // ポップアップデータ
                    const popupData = {
                        'chatbot': {
                            title: '社内ヘルプデスク業務支援用チャットボットシステム',
                            image: 'assets/img/case_chatbot_ai.png',
                            text: `業務マニュアルや仕様書、FAQなどの社内文書を元に、従業員からの
問い合わせに対して適切な回答を即時に提示するAIチャットボット

ナレッジ(社内独自情報)の検索と応答を自動化することで、
ヘルプデスク業務の負荷軽減と対応スピードの向上を実現しています。
RAG（Retrieval-Augmented Generation）技術を応用し、
根拠のある回答生成を行うことで信頼性の高い情報提供が可能となっています。
管理者は、対話ログの収集と改善のための学習データ管理も行える設計となっており、
社内のナレッジ活用と業務効率化を両立させたソリューションとなっています。`
                        },
                        'screw': {
                            title: 'ネジ山の打痕を自動検査する画像処理システム',
                            image: 'assets/img/case_insect_ai.png',
                            text: `人の目による検査に頼っていたネジ山の打痕検査を、
カメラと画像処理によって自動化するシステム

ネジは搬送装置により連続的に供給され、カメラで各ネジの山部を高速撮影。
AIおよび画像解析アルゴリズムにより、打痕や欠け、変形といった不良を
リアルタイムで検出します。
検出された不良品は即座に振り分けられるため、ラインを止めることなく
高精度かつ安定した品質検査が可能となりました。
目視検査に伴う人的ミスや工数の削減に加え、検査結果の記録・
トレーサビリティ(追跡性)の向上にも貢献しています。`
                        },
                        'insect': {
                            title: '虫の識別管理システム',
                            image: 'assets/img/case_machine_ai.png',
                            text: `カメラで撮影された画像から、虫の種別を自動で識別するAIシステム
現場で撮影された虫の画像を即座に解析し、種別を特定・記録することで、
防虫対策や品質管理の高度化を支援。

複数種の虫に対応した画像認識AIを搭載しており、外観が似た種類の判別にも対応可能です。
環境変化や撮影条件の違いにも耐えられるよう、現場環境に合わせた学習データの最適化も
実施しました。
データはクラウド上に蓄積され、記録管理やレポート出力にも対応。検出履歴から出現傾向を
可視化するなど、単なる識別だけでなく、予防・改善策の立案にも貢献するソリューションとなっています。
人による判断のばらつきを排除し、安定した精度で種別判定が行えるシステムとして、
多くの現場での応用が期待されています。`
                        },
                        'embedded': {
                            title: '組込み制御システム',
                            image: 'assets/img/built-in01.jpg',
                            text: `各種マイコンやSoCプラットフォーム
（STMicroelectronics、Renesas、TI、Raspberry Pi、Jetson など）を
活用し、センシング・制御を中心とした組込みシステムの開発を行っています。

センサーから取得した環境データをもとに、ローカルLLM（大規模言語モデル）を用いた
状況把握や判断処理を組み込むことで、よりスマートな制御を実現。家電制御や設備監視、
産業用途まで幅広く対応しており、ハード制約のある現場でも実用的なソリューションを
提供しています。
PoC（概念実証）段階の試作開発から、量産を見据えたファームウェアの設計・実装・テスト
まで一貫して対応可能です。リアルタイム制御や省電力設計、異常検知ロジックの実装など、
高度な制御技術を駆使し、現場の課題に即した高品質な組込みソフトウェアを提供しています。`
                        },
                        'medical': {
                            title: 'Web診療予約システム',
                            image: 'assets/img/web01.jpg',
                            text: `医療機関向け、スマートフォン・PCを活用したクラウド型診療予約システム

患者が自身の診察券番号と名前でログインし、診療科・医師・日時を
選択して予約を完結できるシンプルかつ直感的な操作性を実現しています。
さらに、予約内容の確認・キャンセルにも対応し、利便性を高めました。
既存の電子カルテシステムと連携することで、患者情報や予約情報の同期を可能にし、
受付業務の効率化とミスの削減にも寄与しています。
iPhone、iPad、Android、PC など幅広い端末に対応し、院内外問わず利用可能な点も大きな特長です。
クラウド運用を前提とし、今後の拡張性や保守性にも優れた設計となっています。`
                        },
                        'infra': {
                            title: 'インフラ構築・運用',
                            image: 'assets/img/infrastructure01.jpg',
                            text: `オンプレミス環境からクラウド環境（AWS、Azure、GCP）への移行支援を多数手がけています。
既存システムの構成調査、アセスメントから始まり、最適なクラウドアーキテクチャの設計、
環境構築、データ移行、セキュリティ対策まで、一貫した対応が可能です。

単純なサーバー移行（Lift & Shift）にとどまらず、マイクロサービス化やコンテナ化
（Docker、Kubernetes）、ストレージ最適化、コスト削減策の提案まで踏み込んだ
再設計も支援しています。
業務継続性を確保しながら、段階的な移行を実現するハイブリッド構成の構築や、
BCP（事業継続計画）対策を視野に入れたクラウド活用にも対応。クラウド化による
柔軟性・拡張性を活かしたインフラ構築を通じて、業務の効率化と安定運用を支援しています。`
                        }
                    };
                    
                    // ポップアップを開く
                    function openPopup(type) {
                        const data = popupData[type];
                        if (data) {
                            document.getElementById('popupTitle').textContent = data.title;
                            document.getElementById('popupText').textContent = data.text;
                            document.getElementById('popupImage').src = data.image;
                            document.getElementById('popupImage').alt = data.title;
                            document.getElementById('achievementPopup').style.display = 'flex';
                            document.body.style.overflow = 'hidden';
                        }
                    }
                    
                    // ポップアップを閉じる
                    function closePopup() {
                        document.getElementById('achievementPopup').style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                    
                    // 背景クリックで閉じる
                    document.getElementById('achievementPopup').addEventListener('click', function(e) {
                        if (e.target === this) {
                            closePopup();
                        }
                    });
                    
                    // ESCキーで閉じる
                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape') {
                            closePopup();
                        }
                    });
                </script>
            </div>
        </section>

        <!-- 会社概要セクション -->
        <section class="company-wrapper pt-l ptb-l fadeUpTrigger" id="company">
            <div class="s-container">
                <div class="sectit-box">
                    <img class="icon-company" src="assets/img/icon/icon_company.svg" alt="アイコン：会社概要">
                    <h2>
                        <span class="sectit-en">会社概要</span>
                        <span class="sectit-ja">COMPANY</span>
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
                            コニカミノルタ株式会社<br>
                            株式会社プリバテック<br>
                            日本マイクロシステムズ株式会社<br>
                        </dd>
                    </dl>
                </div>
            </div>
        </section>

        <!-- パートナーセクション -->
        <section class="partner-wrapper pt-l fadeUpTrigger" id="partner">
            <div class="s-container">
                <div class="sectit-box">
                    <img class="icon-partner" src="assets/img/icon/icon_partner.svg" alt="アイコン：パートナー">
                    <h2>
                        <span class="sectit-en">パートナー</span>
                        <span class="sectit-ja">PARTNER</span>
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

        <!-- ニュースセクション -->
        <section class="news-wrapper pt-l pb-l" id="news">
            <div class="s-container">
                <div class="sectit-box">
                    <img class="icon-news" src="assets/img/icon/icon_news.svg" alt="アイコン：お知らせ">
                    <h2>
                        <span class="sectit-en">お知らせ</span>
                        <span class="sectit-ja">NEWS</span>
                    </h2>
                </div>
                <div class="news-list fadeUpTrigger">
                    <!-- ニュース項目1 -->
                    <div class="news-item">
                        <time class="news-date" datetime="2025-06-14">2025.06.14</time>
                        <p class="news-txt">サイトをリニューアルしました。</p>
                    </div>

                    <!-- ニュース項目2 -->
                    <div class="news-item">
                        <time class="news-date" datetime="2025-04-23">2025.04.23</time>
                        <p class="news-txt">
                            <a href="https://qiita.com/Piyovate/items/b0e5a4b2c4c1ed7a3bf8" target="_blank" rel="noopener">
                                ラズベリーパイを活用した『社内環境（温湿度）見える化システム』の開発ブログをQiitaにて連載を開始しました。
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        </p>
                    </div>

                    <!-- ニュース項目3 -->
                    <div class="news-item">
                        <time class="news-date" datetime="2025-04-12">2025.04.12</time>
                        <p class="news-txt">サイトをリニューアルしました。AIソリューションや導入実績を中心に構成を刷新しました。</p>
                    </div>
                    
                    <!-- ニュース項目4 -->
                    <div class="news-item">
                        <time class="news-date" datetime="2025-02-12">2025.02.12</time>
                        <p class="news-txt">採用ページをリニューアルしました！</p>
                    </div>
                    
                    <!-- ニュース項目5 -->
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

        <!-- オフィス環境表示 -->
        <section class="env-status-section" style="padding: 40px 0; text-align: center;">
            <div class="env-status" style="font-size: 18px; color: #666;">
                現在のオフィス環境：
                <span id="status-icon">🔄</span>
            </div>
        </section>
    </main>

    <!-- フッター -->
    <?php require_once("footer.php"); ?>

    <!-- JS -->
    <!-- 最新バージョンの設定（tsParticles v3.x以降推奨） -->
    <script>
    window.addEventListener("load", async () => {
        await tsParticles.load({
            id: "tsparticles",
            options: {
                preset: "links",                             // プリセット：粒子が相互にリンクする設定
                background: { color: "#000" },               // 背景色を黒に設定
                particles: {
                    color: { value: ["#00B4FF", "#A4FF00"] }, // 粒子の色（青と緑）
                    move: { enable: true, speed: 2 },         // 粒子の動きを有効化、速度を指定
                    number: { value: 60 },                    // 画面に表示する粒子の数
                    shape: { type: "circle" }                // 粒子の形を円形に設定
                },
                interactivity: {
                    events: {
                        onhover: { enable: true, mode: "repulse" } // マウスホバーで粒子を遠ざける
                    }
                }
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
    
    <!-- フローティングお問い合わせボタン -->
    <div class="floating-contact-btn">
        <a href="contact" class="floating-contact-link">
            <i class="fas fa-envelope"></i>
            <span>お問い合わせ</span>
        </a>
    </div>
</body>
</html>