# Rest API com Laravel

Trata-se de uma API REST com Laravel construida utilizando a metologia TDD.

## Instalação

- Clone o repositório: git clone https://github.com/DaniKoehler/laravel-api
- Entre na pasta: cd laravel-api
- Entre na pasta: cd laradock
- Suba os containeres: docker-compose up -d nginx mysql phpmyadmin

## Testes
#### Na pasta raiz do projeto

- Execute os testes: vendor/bin/phpunit --testdox Tests/Feature/API/BooksControllerTest.php
