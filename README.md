# evento-musc

# Instalación
Para instalar el proyecto en su máquina, descargue o clone el repositorio.

```
git clone https://github.com/edmoreta/evento-musc.git
```

Una vez descargado, a través de consola acceder a la carpeta del proyecto

```
cd evento-musc
```

Y proceder a instalar todas las dependencias del proyecto
```
composer install
```

Luego generar el archivo de configuración `.env`
```
cp .env.example .env        //GNU / Linux Distributions
copy .env.example .env      //Windows
```

La aplicación necesita una llave de cifrado que se obtiene con el comando
```
php artisan key:generate
```

Por si acaso
```
php artisan cache:clear
php artisan config:cache
```

Para visualizar el proyecto en un navegador, iniciar el servidor web de PHP
```
php artisan serve
```

Por último abrir el navegador http:\\localhost:8000 o http:\\127.0.0.1:8000


```
git remote add origin https://github.com/edmoreta/evento-musc.git
```


# Comandos git
Configurar el email y el nombre de usuario de la cuenta GitHub
```
git config user.email "email"
git config user.name  "name"

```
Se utiliza solo para agregar datos de cada uno, sin bajar de otro respitorio de otro compañero
Para agregar todos los archivos
```
git add .
```
Guardar el commit o cambios del proyecto con un mensaje de descripción
```
git commit -m "su mensaje"
```

Subir al repositorio virtual 'evento-musc'
```
git push origin master
```
# Librerías
```
composer require zizaco/entrust
```
Para la cedula
```
composer require tavo1987/laravel-ec-validator
```
Para PDF
```
composer require barryvdh/laravel-dompdf
```
Cada vez que se instala una nueva librería aplicar el comando
```
composer dump-autoload
```
#comandos

```
composer update
```


