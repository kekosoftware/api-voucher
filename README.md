<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Description

* Laravel: 8.83.6
* Install
    * git clone https://github.com/kekosoftware/api-voucher.git
    * composer install
    * configure .env file
    * php artisan key:generate
    * php artisan migrate
    * php artisan db:seed
    * php artisan serve
    * Archivo para importar en Postman api-voucher.postman_collection.json

## Ejemplos de consultas
* Lista todos los vauchers: http://127.0.0.1:8000/api/v1/voucher
* Verifica que el vaucher esté activo: http://127.0.0.1:8000/api/v1/voucher/active/1
* Lista los vauchers activos de un usuario: http://127.0.0.1:8000/api/v1/voucher/customer/1
