## About

- Laravel Crud News is a system for practice docker and laravel 9.0

- Features: Search and register news, register categories

## Requirements

- Docker

- Docker compose

- [Laravel packaged by Bitnami](https://hub.docker.com/r/bitnami/laravel)

- [Laravel ^9.19 ](https://laravel.com/docs/9.x)

## Install

- docker pull bitnami/laravel

- git clone git@github.com:felipanico/laravel-crud-news.git

- cd laravel-crud-news/my-project

- cp .env.example .env

- docker-compose exec myapp php composer install

- docker-compose exec myapp php artisan migrate

## Patterns

- This project uses Repositories and DB manager class from Laravel (does not use Models)

- Controllers call Repositories directly (there is no need intermediate class for while)

## Contributing

Feel free to contribute with this project