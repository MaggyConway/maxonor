#!/bin/bash

# Комманда для крона
#chmod +x  /home/bitrix/www/local/bin/dump.sh | /home/bitrix/www/local/bin/dump.sh /home/bitrix/www/.env

ENV_FILE="$1"

PRINT_COLOR='\033[0;32m'
NC='\033[0m' # No Color

source $ENV_FILE

# Перейти в нужный проект

printf "> ${PRINT_COLOR}Подготовка ..${NC}\n"

cd /home/bitrix/www/

# Удалить старый дамп
rm -rf .dump

mkdir -p .dump

cd /home/bitrix/www/.dump

printf "> ${PRINT_COLOR}Дамп базы ..${NC}\n"

# Сгенерироваать новый
mysqldump -u$MYSQL_LOGIN -p$MYSQL_PASSWORD $MYSQL_DATABASE > db_dump.sql

printf "> ${PRINT_COLOR}Создание архивов ..${NC}\n"

tar -czvf db_dump.tar.gz db_dump.sql

tar -czvf upload.tar.gz /home/bitrix/www/upload