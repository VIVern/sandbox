include docker/.env-dev

export COMPOSE_FILE
export COMPOSE_PROJECT_NAME

.PHONY: build
build: up composer-install

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

.PHONY: tests
tests:
	@docker exec -it web-sandbox sh -c "vendor/bin/phpunit --colors=always"