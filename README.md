# Sistema de ABM de Productos y Servicios

Este proyecto es un sistema de ABM (Alta, Baja, Modificación) de Productos y Servicios desarrollado con Laravel. Permite a los usuarios gestionar productos y servicios, incluyendo crear nuevos registros, editarlos, ver una lista de todos los registros y eliminarlos.

## Características

- Autenticación de usuarios.
- Creación de nuevos productos o servicios.
- Edición de productos o servicios existentes.
- Visualización de todos los productos o servicios en una lista.
- Eliminación de productos o servicios.
- Estadísticas de registros por día, semana, mes y año.

## Tecnologías Utilizadas

- Laravel 8
- MySQL
- Bootstrap para el diseño frontend

## Requisitos

- PHP >= 7.3
- Composer
- Node.js y NPM
- Servidor de base de datos MySQL

## Instalación

1. Clona este repositorio en tu servidor local o en tu máquina de desarrollo:

```bash
git clone https://github.com/fabriconiglio/ABM_Productos_Servicios.git
```
2. Instala las dependencias de PHP con Composer:

```bash
composer install
```

3. Instala las dependencias de NPM y compila los assets:

```bash
npm install && npm run dev
```

4. Crea una copia de .env.example y renómbrala a .env. Ajusta las variables de entorno, especialmente las relacionadas con la base de datos.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=(nombre de la base de datos)
DB_USERNAME=root
DB_PASSWORD=(contraseña de la base de datos)
```

5. Genera una nueva clave de aplicación:

```bash
php artisan key:generate
```

6. Ejecuta las migraciones para crear las tablas de la base de datos:

```bash
php artisan migrate
```

7. Ejecuta los seeders para poblar la base de datos con datos de prueba:

```bash
php artisan db:seed
```

8. Inicia el servidor de desarrollo:

```bash
php artisan serve
```

## Uso

- Regístrate o inicia sesión para acceder al sistema.
- Navega a la sección de Productos/Servicios para comenzar a gestionar los registros.

## Contribuir

Si deseas contribuir a este proyecto, por favor crea un fork y envía un pull request con tus cambios.

## Licencia

Este proyecto es de código abierto y está disponible bajo la licencia MIT.
