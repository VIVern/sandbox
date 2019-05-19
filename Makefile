include docker/.env-dev

export COMPOSE_FILE
export COMPOSE_PROJECT_NAME

.PHONY: build
build: up composer-install migrate

.PHONY: down
down:
	@docker-compose down --remove-orphans

.PHONY: up
up: down
	@docker-compose build
	@docker-compose up -d

.PHONY: composer-install
composer-install:
	@docker exec -it web-sandbox sh -c "composer install -o -n"

.PHONY: migrate
migrate:
	mysql --host=0.0.0.0 --port=33306 --user=root --password=${MYSQL_ROOT_PASSWORD} sandbox-db < app/migrations/driver_table.sql

.PHONY: tests
tests:
	@docker exec -it web-sandbox sh -c "vendor/bin/phpunit --colors=always"
