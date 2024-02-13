# projeto-ehs

# Processo Seletivo - projeto-ehs

Este é um projeto feito com Laravel Sail para facilitar o ambiente de desenvolvimento usando contêiner Docker.

## Requisitos

- Docker
- Docker Compose
- Composer

## Instalação

1. baixe a aplicação

2. Instale o Laravel Sail ou o Laravel comum: 
    cd projeto-ehs5
    composer require laravel/sail --dev

3. Inicialize o Laravel Sail:
    php artisan sail:install

4. Inicie os contêineres Docker:
    ./vendor/bin/sail up -d

5. Instale as dependências e execute as migrações:
    ./vendor/bin/sail composer install
    ./vendor/bin/sail artisan migrate

6. Suba alguns dados fake para popular o banco:
    ./vendor/bin/sail artisan db:seed

7. Para acessar a aplicação:
    http://localhost/


Obs: O MySql deve estar em execução na hora de rodar as migrations e as seeders. Ao seguir o passo a passo o docker fará isso automaticamente!

