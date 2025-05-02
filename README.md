# Technosphere Webサイト - コーポレートページ

このリポジトリは、Technosphere社のコーポレートWebサイトのソースコードを管理しています。PHPベースで構成され、最新のHTML/CSS/JSと画像素材を組み合わせた静的ページ群です。
---

## 📁 ディレクトリ構成

```
/
├── index.php               # トップページ
├── contact/                # お問い合わせフォーム
│   └── index.php           # お問い合わせフォーム本体
│   └── thanks.php          # 送信完了ページ
├── privacy/                # プライバシーポリシー
│   └── index.php           # プライバシーポリシー本体
├── ai_chatbot/             # AIチャットボット特設ページ
│   └── index.php           # 特設ページ本体
├── assets/
│   ├── css/                # スタイルシート
│   │   └── style.css       # メインスタイル
│   ├── js/                 # JavaScript
│   │   ├── jquery-3.7.1.min.js  # jQuery
│   │   ├── main.js         # メインスクリプト（アニメーション・UI制御）
│   │   ├── env-status.js   # 現在のオフィス環境の管理
│   │   └── raspi-config.js # raspi関連のjsの設定ファイル
│   ├── img/                # 画像
│   │   ├── common/         # 共通画像（ロゴなど）
│   │   │   ├── logo.svg    # メインロゴ
│   │   │   └── logo_white.svg  # フッター用ロゴ
│   │   ├── bg_MV.jpg       # メインビジュアル背景
│   │   ├── banner_rag_ai_v2.png  # AIチャットボットバナー
│   │   ├── logo_forxai.png # パートナーロゴ
│   │   ├── case_*.png      # 実績画像（AI系）
│   │   ├── built-in*.jpg   # 実績画像（組み込み系）
│   │   ├── graphic*.jpg    # 実績画像（画像処理）
│   │   ├── web*.jpg        # 実績画像（Web系）
│   │   ├── smartphone*.jpg # 実績画像（スマホアプリ）
│   │   └── infrastructure*.jpg  # 実績画像（インフラ）
│   ├── icon/               # アイコン素材
│   │   ├── icon_news.svg   # ニュースアイコン
│   │   ├── icon_service.svg # サービスアイコン
│   │   ├── icon_partner.svg # パートナーアイコン
│   │   ├── icon_message.svg # メッセージアイコン
│   │   └── icon_company.svg # 会社概要アイコン
│   └── illust/             # イラスト素材
│       ├── illust_service01.svg # サービスイラスト1
│       ├── illust_service02.svg # サービスイラスト2
│       ├── illust_service03.svg # サービスイラスト3
│       ├── illust_service04.svg # サービスイラスト4
│       └── illust_service05.svg # サービスイラスト5
└── .htaccess               # Apache設定ファイル
```

---

## 🧠 AIソリューションと技術スタック

### AI技術
- 画像認識AI：深層学習（Deep Learning）による異物検出・分類
- RAGチャットボット：社内ドキュメントとの連携自然言語応答
- エッジAI：Jetson OrinやラズパイでのリアルタイムAI推論

### 技術スタック
- **フロントエンド**: HTML5, CSS3, JavaScript (ES6+), jQuery 3.7.1
- **バックエンド**: PHP 8.2+
- **ホスティング**: AWS/Netlify
- **パフォーマンス最適化**: レスポンシブデザイン, 画像最適化, レイジーロード
- **セキュリティ**: HTTPS対応, CSP (Content Security Policy)

---

## 💻 開発・実行環境

- **PHP**: 8.2以上
- **Webサーバー**: Apache 2.4+ または Nginx 1.20+
- **ブラウザ対応**: Chrome, Firefox, Safari, Edge最新版
- **モバイル対応**: iOS 15+, Android 11+

### ローカル開発環境構築
```bash
# ローカルサーバー起動（PHPビルトインサーバーを使用）
cd /path/to/project
php -S localhost:8000
```

---

## 🔄 今後の機能拡張と最適化計画

### 短期計画 (2025 Q2-Q3)
- モバイルユーザーエクスペリエンスの向上
- PWA (Progressive Web App) 対応
- Webパフォーマンスのさらなる最適化
- アクセシビリティ対応強化

### 中長期計画 (2025 Q4-2026)
- CMS連携（WordPress/Contentful）
- 多言語対応（英語/中国語）
- マイクロインタラクション強化
- オンライン問い合わせプラットフォームとの統合

---

## 📊 パフォーマンスとSEO

- **Lighthouse スコア**: Performance 95+, Accessibility 95+, Best Practices 95+, SEO 100
- **Google PageSpeed**: モバイル 90+, デスクトップ 95+
- **Core Web Vitals**: 全指標クリア
- **SEO最適化**: メタタグ, 構造化データ, セマンティクスHTML

---

## 📝 貢献ガイドライン

1. リポジトリをフォーク
2. 機能ブランチを作成 (`git checkout -b feature/amazing-feature`)
3. 変更をコミット (`git commit -m 'Add amazing feature'`)
4. ブランチにプッシュ (`git push origin feature/amazing-feature`)
5. プルリクエストを作成

---

## 📌 休日（休業日）の追加手順

ホームページ上に表示される「休業日」を追加する場合は、以下のファイルを修正します。

### 設定ファイルの場所
```
assets/js/raspi-config.js
```

### 変更方法

`raspi-config.js` ファイル内の `holidays` 配列に、休日として追加したい日付を以下のような形式で追記してください。

```js
// raspi-config.jsの休日追加例
const ENV_CONFIG = {
    holidays: [
        '2021-07-21', // 例:創業日と同様の形式で休業日を入力してください
        // 臨時休業日をここに追加
    ]
};
```

### 備考

- 日付の形式は `'yyyy-mm-dd'`（半角）で記載してください。
- 国民の祝日についてはAPIを利用し自動的に反映されるため対応は不要です。
- 使用API: https://api.national-holidays.jp/（現在の年を自動的に取得して利用）
- 変更後はブラウザのキャッシュをクリア（Ctrl+Shift+R）して反映を確認してください。

---

## 📄 ライセンスと著作権

© 2025 Technosphere co.,ltd. All rights reserved.

本リポジトリのコードと画像はTechnosphere社の所有物であり、許可なく再配布または商用利用することを禁じます。
