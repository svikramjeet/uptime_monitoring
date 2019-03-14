#!/bin/bash
chmod +x ./.deploy/commands/*.sh

echo "Checking Migrations..."
  php artisan migrate

echo "Checking Environment variables..."
  php ./.deploy/commands/update_env

echo "Clearing the cache..."
  php artisan cache:clear  
  php artisan config:clear
  php artisan optimize:clear
  php artisan route:clear
  php artisan view:clear

