#####################################
#        	MakeFile 
#####################################
install:
	cp .env.example .env
	docker-compose up -d
	docker exec -it bitrix composer install
	mkdir -p .dump
	mkdir -p  _code_logs
	wget -O .dump/db_dump.tar.gz https://maxonor.ru/.dump/db_dump.tar.gz
	tar -xvf .dump/db_dump.tar.gz -C .dump
#	wget -O .dump/upload.tar.gz https://maxonor.ru/.dump/upload.tar.gz
	make db-import

#####################################
#        	PHP Exchange 
#####################################
php-exchange-product:
	php local/modules/sntinvest.integration/run exchange:product

#####################################
#        	Вump 
#####################################

# Импорт базы
db-import:
	docker exec -i db mysql -uroot -p123 bitrix < db_dump.sql

#####################################
#        MARKET OZON IMPORT
#####################################

# Выгрузка общая из озон
market-ozon-import:
	make market-ozon-products
	make market-ozon-sku
	make market-ozon-status

# Выгрузка товаров из озон
market-ozon-products:
	docker exec bitrix php local/modules/sntinvest.market/run market:ozon products

# Выгрузка статусов из озон
market-ozon-status:
	docker exec bitrix php local/modules/sntinvest.market/run market:ozon status

# Выгрузка SKU из озон
market-ozon-sku:
	docker exec bitrix php local/modules/sntinvest.market/run market:ozon sku

#####################################
#        MARKET YANDEX IMPORT
#####################################

# Выгрузка общая из yandex
market-yandex-import:
	make market-yandex-products
	make market-yandex-sku
	make market-yandex-status

# Выгрузка товаров из yandex
market-yandex-products:
	docker exec bitrix php local/modules/sntinvest.market/run market:yandex products

# Выгрузка статусов из yandex
market-yandex-status:
	docker exec bitrix php local/modules/sntinvest.market/run market:yandex status

# Выгрузка SKU из yandex
market-yandex-sku:
	docker exec bitrix php local/modules/sntinvest.market/run market:yandex sku


