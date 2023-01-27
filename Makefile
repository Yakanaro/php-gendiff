lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin tests
test:
	composer exec --verbose phpunit tests
install:
	composer install
autoload:
	composer dump-autoload
validate:
	composer validate
