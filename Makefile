APP_CONTAINER_NAME = "icecat-php8.3"
DB_CONTAINER_NAME = "icecat-MariaDB10.5"

help: ## Display this help
	@printf "\nUsage:\n  make \033[36m<target>\033[0m\n\nTargets:\n"
	@awk -F ":.*##" '/^[a-zA-Z_-]+:.*?##/ { printf "  \033[36m%-35s\033[0m %s\n", $$1, $$2 }' $(MAKEFILE_LIST) | sort -u

######################################################################
############################### Docker ###############################
######################################################################
build: ## Build container image
	@docker-compose build

up: ## Starts the full docker-compose stack
	@docker-compose up -d

stop: ## Stops the full docker-compose stack, but keeps containers
	@docker-compose stop

down: ## Drop all container instances for a fresh restart
	@docker-compose down -v

######################################################################
################################ App #################################
######################################################################
bash: ## Connect with app container
	@docker exec -it $(APP_CONTAINER_NAME) bash

composer-install: ## Composer install
	@docker exec -it $(APP_CONTAINER_NAME) composer install

composer-update: ## Composer update
	@docker exec -it $(APP_CONTAINER_NAME) composer update

clear-caches: ## Clear caches
	@docker exec -it $(APP_CONTAINER_NAME) bash -c 'bin/console cache:clear'

yarn-watch: ## Yarn watch
	@docker exec -it $(APP_CONTAINER_NAME) bash -c 'yarn watch'

generate-bundle: ## Generate bundles
	@docker exec -it $(APP_CONTAINER_NAME) bash -c 'bin/console webwms:generate:bundle'

######################################################################
############################## Database ##############################
######################################################################
backup:
	@docker exec -it $(APP_CONTAINER_NAME) bash -c 'cd /var/backup/mysql && ./backup-database.sh'

list-backup:
	@docker exec -it $(APP_CONTAINER_NAME) ls /var/backup/mysql

######################################################################
################################ Logs ################################
######################################################################
logs: ## Tail application container logs
	@docker logs -f $(APP_CONTAINER_NAME)

db-logs: ## Tail database container logs
	@docker logs -f $(DB_CONTAINER_NAME)

######################################################################
########################### Code Analysis ############################
######################################################################
phpstan: ## Run code analyse for src and bundles folder (phpstan)
	@vendor/bin/phpstan analyse;

phpstan-baseline: ## Run code analyse (phpstan) incl. baseline
	@vendor/bin/phpstan analyse --generate-baseline;

var-dump-check: ## Find var_dump, dd, etc.
	@vendor/bin/var-dump-check --symfony --doctrine --exclude vendor .

######################################################################
########################## Code Style Check ##########################
######################################################################
php-cs: ## Run code style check
	@vendor/bin/php-cs-fixer fix --dry-run --using-cache=no -vvv --show-progress=dots --allow-risky=yes;

phpcs-fix: ## Run code style fix
	@vendor/bin/php-cs-fixer fix --using-cache=no -vvv --show-progress=dots --allow-risky=yes;

phpmd: ## Run code check (phpmd)
	@vendor/bin/phpmd './src/' ansi rulesets.xml;

######################################################################
############################### Tests ################################
######################################################################
run-tests-unit: ## Run unit tests
	@vendor/bin/phpunit --coverage-html var/reports/;

######################################################################
##################### Automated Code Refactoring #####################
######################################################################
run-rector: ## Run automated refactoring dry run
	@vendor/bin/rector process --dry-run;

run-rector-refactoring: ## Run automated refactoring
	@vendor/bin/rector process;
