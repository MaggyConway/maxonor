# Maxonor

## Installation

Download the code from the repository

```sh
git clone https://git.sntinvest.ru/stm/maxonor.git
```

## Start development

Open terminal and go to project

```sh
cd /mnt/c/Development/Sntinvest/maxonor
```

Go to remote server and log in to GitLab 
- Username: [login]
- Password: [Personal Access Tokens]

```sh
docker login git.sntinvest.ru:5050
```

Run docker apps

```sh
docker-compose up -d
```
Go to virtual machine terminal

```sh
docker exec -it bitrix bash
```

Run commands

```sh
composer install
```

import DB 
docker exec -i db mysql -ubitrix -p123 bitrix < docker/dump/dump.sql

File .env
MYSQL_HOST=db
MYSQL_DATABASE=bitrix
MYSQL_LOGIN=bitrix
MYSQL_PASSWORD=123

BITRIX_DEBUG=true


Open in browser
[http://localhost](http://localhost)

