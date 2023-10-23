# LARAVEL ADVANCED

## ABOUT THIS PROJECT
This project follows the following courses:
- https://www.cursosdesarrolloweb.es/course/arquitectura-hexagonal-laravel

## RUN THE PROJECT
- Create the .env file from the .env.example and set the variables (for the `project` and for `docker` variables)
- Replace the environtment variables (note that NAME_PROJECT must be the same on all .env files)
- Set up the project with `make setup` [WARNING] - This environtment is for development purposes. This command, makes unsafe environtment for security
- Start the project `make up`

# Main commands

## Make commands
- `make up`: starts the docker containers
- `make down`: stops the docker containers
- `make php`: access to the php container
- `make run`-tests: runs the project tests

Add phpunit and test it
```
docker-compose run composer require --dev phpunit/phpunit
docker-compose run php vendor/bin/phpunit
docker-compose run phpunit --version
```

Run phpunit tests
```
docker-compose run --rm phpunit tests
```

Run phpunit tests
```
docker-compose up -d fpm nginx
```

Composer dump autoload
```
docker-compose run composer -- dump
```
