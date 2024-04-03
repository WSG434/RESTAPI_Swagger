  <h1 align="center">RESTAPI_Swagger 📚 </h1>
  <h3 align="center">Granular project for skills demo </h3>

## 🚀 Stack

- PHP, Laravel
	- Middleware, Request, Validate, Resource
	- ORM Eloquent
	- Laravel Breeze
	- MVC, SOLID, DRY, KISS 
- JWT Auth, Swagger, Docker
- git, Postman, xDebug

## ⚡ Quick setup

1. Скачать проект `git clone https://github.com/WSG434/RESTAPI_Swagger.git`
2. Скопировать и запустить в терминале: 
	`docker compose up --build -d && docker compose exec php-cli composer install && docker compose exec php-cli php artisan migrate && docker compose exec php-cli php artisan db:seed && docker compose exec node npm install && docker compose exec node npm run build`
3. Перейти в браузер по адресу `localhost:8080/api/documentation` 
   
    Пользователь для получения токена:
   - L: example@google.com
   - P: 12345678

PS: По адресу `localhost:8080` доступен интерфейс laravel breeze

## 💻 Preview

![RESTAPI_swagger](https://downloader.disk.yandex.ru/preview/5f1848046d4a7c103b528c4d97caa060b16d8adaa62d4d5222f6e07c8f9053ad/660d632d/wTq2rzB8NBqTxkRi1rbyuoDS_X5nhvmdozjGUtA9ujCt42hjpK9Sqk73k0RsDnupnTx8rPCiZ1RCwESxNf5xlw%3D%3D?uid=0&filename=2024-04-03_12-36-21.jpg&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=0&tknv=v2&size=2048x2048)
