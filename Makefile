
tests:
	php  bin/console doctrine:fixtures:load
	php bin/phpunit $@
.PHONY: tests
