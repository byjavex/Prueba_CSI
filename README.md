<<<<<<< HEAD

<p align="center">
  <a href="https://laravel.com" target="_blank">
	 <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# Prueba CSI

Este proyecto es una aplicación web desarrollada con el framework **Laravel**.

## Requisitos

- PHP >= 8.1
- Composer
- MySQL o cualquier base de datos compatible

## Instalación

1. Clona el repositorio:
	```bash
	git clone https://github.com/byjavex/Prueba_CSI.git
	cd Prueba_CSI
	```
2. Instala las dependencias:
	```bash
	composer install
	```
3. Copia el archivo de entorno y configura tus variables:
	```bash
	cp .env.example .env
	```
	Edita el archivo `.env` con tus credenciales de base de datos y otros parámetros.
4. Genera la clave de la aplicación:
	```bash
	php artisan key:generate
	```
5. Ejecuta las migraciones:
	```bash
	php artisan migrate
	```

## Uso

Para iniciar el servidor de desarrollo ejecuta:

```bash
php artisan serve
```

Luego accede a [http://localhost:8000](http://localhost:8000) en tu navegador.

## Recursos

- [Documentación de Laravel](https://laravel.com/docs)
- [Laracasts](https://laracasts.com)

## Licencia

Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).
