@echo off

SET CURRENTPATH=%~dp0..
SET "CURRENTPATH=%CURRENTPATH:\=/%"
:: SET CURRENTPATH=C:/DESARROLLO/inventario_sotano_api2

:: docker exec inventario_sotano_api2-php composer %*
docker run --rm --interactive --tty --volume %CURRENTPATH%:/app inventario_sotano_api2-php composer %*
