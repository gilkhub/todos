## Todos Ember.js 1.10.0 + Laravel 4.2


## How to start:

1. Preapare environment variables for easy DB configuration as shown in the shell commands (fake user and password values are shown as example).
2. Create the DB table with migrations.
3. Seed the DB for easy testing.
4. Start an artisan development server.


```shell
DB_HOST=localhost DB_NAME=todos DB_USERNAME=root DB_PASSWORD=passpasspass php artisan db:migrate
```


```shell
DB_HOST=localhost DB_NAME=todos DB_USERNAME=root DB_PASSWORD=passpasspass php artisan db:seed
```


```shell
DB_HOST=localhost DB_NAME=todos DB_USERNAME=root DB_PASSWORD=passpasspass php artisan serve
```



## Developed and tested with the following versions:

PHP 7.0.25 (cli)

Laravel Framework version 4.2.22

MySQL Server version: 5.7.20 Homebrew

Ember.js 1.10.0

Node 8.8.1

NPM 5.4.2

Bower 1.8.2


## Notes:
The HTML is in "/public/home.php" to avoid CORS problem