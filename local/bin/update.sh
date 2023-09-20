#!/bin/sh

# Комманда для крона
#chmod +x  /home/bitrix/www/local/bin/update.sh | /home/bitrix/www/local/bin/update.sh develop

# Перейти в нужный проект
cd /home/bitrix/www

# Выполнить ряд команд для автоматического дейплоя

if [ -n "$1" ]
then
git pull origin $1
fi

composer install

php local/bin/migrate.php up