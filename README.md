  <h1 align="center">RESTAPI_Swagger 📚 </h1>
  <h3 align="center">Granular project for skills demo </h3>

![RESTAPI_Swagger](https://github.com/WSG434/RESTAPI_Swagger/blob/master/preview.jpg?raw=true)

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
