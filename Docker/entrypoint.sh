#!/bin/bash
composer install
php artisan key:generate
php artisan migrate
sudo chown -R www-data:www-data storage