## Todos Ember.js 1.10.0 + Laravel 4.2


## How to start:

1. On your development machine, preapare a MySQL DB and environment variables for easy DB configuration as shown in the following shell commands (fake user and password values are shown as example).


2. Create the DB table with migrations at root dir:
```shell
DB_HOST=localhost DB_NAME=todos DB_USERNAME=root DB_PASSWORD=passpasspass php artisan db:migrate
```

3. Seed the DB for easy testing at root dir:
```shell
DB_HOST=localhost DB_NAME=todos DB_USERNAME=root DB_PASSWORD=passpasspass php artisan db:seed
```

4. Install frontend dependencies:
```shell
cd public && bower install
```

5. Start an artisan development server at root dir:
```shell
DB_HOST=localhost DB_NAME=todos DB_USERNAME=root DB_PASSWORD=passpasspass php artisan serve
```

6. In your browser (supports Chrome and FireFox) go to:
```
http://localhost:8000/
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
