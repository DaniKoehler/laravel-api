# Rest API com Laravel

Tratasse de uma API REST com Laravel construida utilizando a metologia TDD.

## Instalação

- Clone o repositório: git clone https://github.com/DaniKoehler/laravel-api
- Suba os containeres: docker-compose up -d nginx mysql phpmyadmin
- Instale as dependências: composer install

## Testes

- Execute os testes: vendor/bin/phpunit --testdox Tests/Feature/API/BooksControllerTest.php
