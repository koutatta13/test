# docker-laravel-handson

docker compose build
docker compose up -d

docker compose down
起動しているコンテナ確認
docker ps -a

[mac] $ docker compose exec app bash
webコンテナに入る
[mac] $ docker compose exec app ash
dbコンテナに入る
[mac] $ docker compose exec db bash
dbコンテナのMySQLに接続する
[mac] $ docker compose exec db bash -c 'mysql -u $MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE'

# migrate
[mac] $ docker compose exec app php artisan migrate

# all drop table & migrate & seeding
[mac] $ docker compose exec app php artisan migrate:fresh --seed

# seeding
[mac] $ docker compose exec app php artisan db:seed