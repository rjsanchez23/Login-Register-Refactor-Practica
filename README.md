#Sistema de login en php
-----------------------------------------------------------
##Instalación:
----------------------------
* Una vez clonado nuestro repositorio, necesitaremos instalar composer (si ya tienes instalado composer puedes omitir este paso) :
```bash
$ curl -sS https://getcomposer.org/installer 
$ sudo mv composer.phar /usr/local/bin/composer
```
* Usa vez tenemos instalado Composer nos dirigimos a nuestra carpeta del proyecto donde se encuentra el fichero composer.json
y ejecutaremos el siguiente comando:
```bash
$ composer update
```
* Ahora es necesario tener la base de datos mysql creada.
* Una vez creada podremos importar a nuestra base de datos el fichero `users.sql` que se encuentra en este repositorio.

## Configuración:
------------------------
* Para configurar los datos de acceso a la base de datos de nuestra aplicación tendremos que acceder a:
```bash
/config/db_params.php
```
*Para configurar las rutas a los ficheros donde queramos dirigirnos una vez logueados o los mensajes de salida en consola:
```bash
/config/login_params.php
```
* Hecho! nuestro sistema de login ya está funcionando

