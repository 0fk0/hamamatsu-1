# Relicサマーインターン(8/21~8/25)の成果物
## チームメンバー(papers)
- 0fk0
- Akira3085
- 429uuuu

## 初回セットアップ

```sh
# 作業ディレクトリに移動して以下の設定を行う

cp .env.example .env

#　以下はまとめてコピペして実行してください
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install

docker-compose up -d
docker-compose exec laravel.test php artisan key:generate
docker-compose exec laravel.test php artisan migrate:fresh
docker-compose exec laravel.test npm install
docker-compose exec laravel.test npm run dev

# MigrationとSeederでデータベースとテストデータを作成
docker-compose exec laravel.test /bin/bash
php artisan migrate
php artisan db:seed
```

## 起動

```sh
docker-compose up -d
docker-compose exec laravel.test npm run dev
```

## 停止

```sh
docker-compose stop
```

## URL
アプリアクセス：http://localhost/

phpMyAdmin: http://localhost:8080/

## コマンドリファレンス

```sh
# MySQLコンソールにログイン
docker-compose exec mysql mysql -u sail -p'password' example_app

# キャッシュ削除
docker-compose exec laravel.test php artisan cache:clear
docker-compose exec laravel.test php artisan config:clear
docker-compose exec laravel.test php artisan route:clear
docker-compose exec laravel.test php artisan view:clear
docker-compose exec laravel.test php artisan clear-compiled

# Laravel実行コンテナにログイン
docker-compose exec laravel.test /bin/bash
```
