# Corporate Website for Thechnoshere

このリポジトリは、当社のコーポレートサイトのソースコードを管理するためのものです。PHPベースで構築され、HTML/CSSでデザインされています。

## 📁 ディレクトリ構成

```
www/
├── index.php               # トップページ
├── contact.php             # お問い合わせページ
├── thanks.php              # 送信完了ページ
├── privacy.php             # プライバシーポリシー
├── header.php / footer.php # 共通ヘッダー／フッター
├── assets/
│   ├── css/                # CSSファイル
│   └── img/                # 画像素材
```

## 🧰 使用技術

- PHP
- HTML5 / CSS3
- Apache `.htaccess` 設定
- レスポンシブ対応

## 🚀 デプロイ方法

1. Webサーバー（Apacheなど）に `www_new` ディレクトリの内容を配置
2. `.htaccess` の設定が有効であることを確認
3. 必要に応じて `contact.php` のメール送信設定を編集

## ✅ 備考

- macOS由来の `.DS_Store` ファイルが含まれている場合は削除して問題ありません。
- `style.css.map` はソースマップです。不要であれば削除可能です。

---

© [Technosphere co.,ltd] All rights reserved.
