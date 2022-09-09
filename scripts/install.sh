#!/bin/sh
# chmod u+x YourScript.sh

echo "\nSetting Up The Project... \n"
echo "\nClearing The Cache... \n"

CURRENT_DIRECTORY=$(cd `dirname $0` && pwd)

php artisan clear 
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "\nInstalling Dependencies... \n"

composer install --no-interaction

# Create .env if not Existed
if [ -f "$CURRENT_DIRECTORY/../.env" ]
then
    echo "\n.env file already exists \n"
else 
    echo "\nCreating an env file... \n"
    cp .env.example .env
fi