@echo off

SET CURRENTPATH=%~dp0..
SET "CURRENTPATH=%CURRENTPATH:\=/%"
:: SET CURRENTPATH=C:/DESARROLLO/inventario_sotano_api2

:: docker exec phpstan analyse src src/Tests %*
:: cmd/php vendor/bin/phpstan analyse src src/Tests %*
docker run --rm --interactive --tty --volume %CURRENTPATH%:/app ghcr.io/phpstan/phpstan analyse src src/Tests %*
