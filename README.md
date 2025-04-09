# 📘 Memo API

Laravel を使用したシンプルなメモ管理用 Web API です。  
このAPIは **ローカルサーバー** 上で動作し、メモの登録・取得・更新・削除が行えます。

---

## ⚙️ 開発環境・要件

このプロジェクトを動作させるためには、以下のツールが必要です：

- PHP
- Composer
- データベース：**MySQL** または **SQLite**

---

## 🚀 起動方法
以下の手順に従って、ローカル環境でアプリケーションを起動してください。

```bash
# 1. 依存関係のインストール
composer install

# 2. 環境ファイルの作成
cp .env.example .env

# 3. アプリケーションキー生成
php artisan key:generate

# 4. マイグレーションの実行
php artisan migrate

# 5. ローカルサーバーの起動
php artisan serve
```
サーバーが起動したら、APIは以下のURLで動作します：
```bash
http://localhost:8000/api/memos
```
APIの仕様は`/doc/openapi.yaml`を確認してください。