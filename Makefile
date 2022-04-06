
tests:
	php  bin/console doctrine:fixtures:load
	php bin/phpunit $@
.PHONY: tests

mgrs:
	php bin/console doctrine:migrations:migrate

mig:
	php bin/console make:migration
