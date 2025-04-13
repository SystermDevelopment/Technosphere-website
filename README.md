# Technosphere Webサイト - コーポレートページ

このリポジトリは、Technosphere社のコーポレートWebサイトのソースコードを管理しています。PHPベースで構成され、HTML/CSS/JSと画像素材を組み合わせた静的ページ群です。

---

## 📁 ディレクトリ構成

```
www_new/
├── index.php               # トップページ
├── contact.php             # お問い合わせフォーム
├── thanks.php              # 送信完了ページ
├── privacy.php             # プライバシーポリシー
├── assets/
│   ├── css/                # スタイルシート（style.cssなど）
│   ├── js/                 # JavaScript（jQuery/アニメーション）
│   ├── img/                # 画像（バナー、実績画像など）
│   ├── icon/               # アイコン素材（SVG）
│   ├── illust/             # イラスト素材
│   ├── scss/               # SCSSファイル群（開発用）
```

---

## 🧠 特設ページ・AIチャットシステム連携について

- 特設ページバナー画像を `/assets/img/banner_rag_ai_v2.png` に配置しています
- このバナーは `/ai-chatbot/` ページへリンクしており、Retrieval-Augmented Generation（RAG）を用いたAIチャットボットシステムを紹介します
- Slack連携や社内FAQ/マニュアルから回答を生成する実例を掲載

---

## 🔧 実行環境

- PHP 7.x 以上
- HTML5 / CSS3 / JavaScript（jQuery 3.7.1）
- Webサーバー（Apache/Nginx など）

---

## 🔄 今後の拡張予定

- CMS化対応（WordPress / Headless CMS）
- 多言語化対応
- お知らせ管理システムとの連携

---

## 📝 著作権

© 2025 Technosphere co.,ltd All rights reserved.
