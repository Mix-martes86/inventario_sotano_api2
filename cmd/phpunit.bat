@echo off

SET CURRENTPATH=%~dp0..
SET "CURRENTPATH=%CURRENTPATH:\=/%"
:: SET CURRENTPATH=C:/DESARROLLO/inventario_sotano_api2

:: docker exec phpunit run %*
:: cmd/php vendor/bin/phpunit --configuration phpunit.xml.dist %*
:: docker run --rm --interactive --tty --volume %CURRENTPATH%:/app phpunit/phpunit run %*
docker-compose exec php php vendor/bin/phpunit --configuration phpunit.xml.dist %*
