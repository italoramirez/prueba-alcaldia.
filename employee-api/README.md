<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Instalaciones necesarias para el proyecto:

- PHP 8.1
- Composer
- Laravel 10

## Instalaciones

## Docker: Instalar o tener docker desktop
- Ejecutar docker-compose buil
- Ejecutar el comando docker-compose up -d
- Dentro del contenedor ejecutar docker exec ít <nombre contenedor>  composer install

## Mac
- Instalar php 8.1
- instalar composer y laravel
- Ejecutar composer install
- Ejecutar php artisan serve

## Windows

- Tener laragon instalado o Xampp
- Agregar el poryecto a la carpeta www o htdocs
- Ejecutar composer install
- Ejecutar php artisan serve

## Configuración de la base de datos

- Crear una base de datos en MySQL
- Configurar el archivo .env con los datos de la base de datos
- Ejecutar php artisan migrate

## Configuración de la base de datos con Docker
- Ejecutar el comando docker exec -it <nombre contenedor> php artisan migrate
- Ejecutar el comando docker exec -it <nombre contenedor> php artisan db:seed
- Configurar el archivo .env con los datos de la base de datos

## Conandos para ejecutar las pruebas
- ./vendor/bin/phpunit
- ./vendor/bin/phpunit --filter test_get_all_employees
