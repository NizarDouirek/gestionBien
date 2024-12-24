#!/usr/bin/env bash
# Installer Composer
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

# Installer les dépendances PHP
composer install --no-dev --optimize-autoloader

# Installer les dépendances JavaScript
npm install
npm run build

# Appliquer les migrations Laravel
php artisan migrate --force

