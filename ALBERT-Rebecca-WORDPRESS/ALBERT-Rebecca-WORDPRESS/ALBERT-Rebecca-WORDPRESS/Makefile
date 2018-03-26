.PHONY: start data stop
start:
	docker-compose up -d

mysqldump:
	docker exec ALBERT-Rebecca-DB bash -c "mysqldump -u wordpress -pwordpress --all-databases > /docker-entrypoint-initdb.d/mysql_dump.sql"

stop:
	docker exec ALBERT-Rebecca-DB bash -c "mysqldump -u wordpress -pwordpress --all-databases > /docker-entrypoint-initdb.d/mysql_dump.sql" && docker-compose down
