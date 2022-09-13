## About

- Laravel Crud News is a system for practice docker containerization and laravel 9.0.

- Features: Search and register news, register categories.

## Requirements

- Docker 

- Docker compose

- Docker image: php:8.1-apache-buster

- [Laravel ^9.19 ](https://laravel.com/docs/9.x)

## Install

```bash

git clone git@github.com:felipanico/laravel-crud-news.git

cd laravel-crud-news/docker/web

docker-compose up --build

cp .env.example .env

docker-compose exec database bash

mysql -u root -p[PASSWORD env file]

```

```mysql
create database homestead;
```

```bash
exit; #mysql

exit #container

docker-compose exec --user app web bash

php composer install

php artisan migrate

php artisan key:generate

exit

```

## Patterns

- This project uses Repositories and DB manager class from Laravel (does not use models)

- Controllers calls Repositories directly (there is no need intermediate class for while)

## Contributing

Feel free to contribute with this project