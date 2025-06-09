#!/bin/bash

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Install Node.js dependencies
npm ci

# Build assets
npm run build

# Generate Laravel application key if not set
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --show
fi

# Cache Laravel configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache
