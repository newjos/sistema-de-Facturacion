<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

# Sistema de Facturación NEWJOS

Este proyecto es un sistema de facturación desarrollado en Laravel, creado y mantenido por Numan Febres. Incluye módulos completos para la gestión de productos, ventas, compras, clientes, proveedores, marcas, presentaciones, comprobantes, documentos y personas.

## Características principales
- CRUD completo para todos los módulos principales.
- Interfaz moderna con Bootstrap y notificaciones SweetAlert2.
- Tablas dinámicas con Simple Datatables.
- Arquitectura MVC de Laravel.
- Migraciones y seeders para la base de datos.

## Instalación
1. Clona el repositorio:
   ```bash
   git clone https://github.com/tuusuario/sistema-newjos.git
   cd sistema-newjos
   ```
2. Instala dependencias:
   ```bash
   composer install
   npm install && npm run build
   ```
3. Copia el archivo de entorno y configura tus variables:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Ejecuta las migraciones y seeders:
   ```bash
   php artisan migrate --seed
   ```
5. Inicia el servidor:
   ```bash
   php artisan serve
   ```

## Módulos incluidos
- Productos
- Ventas
- Compras
- Clientes
- Proveedores
- Marcas
- Presentaciones
- Comprobantes
- Documentos
- Personas

Cada módulo cuenta con rutas, controladores y vistas CRUD.

## Autor
Este sistema fue desarrollado por **Numan Febres** como aporte propio. Puedes usarlo, modificarlo y compartirlo bajo los términos de la licencia MIT.

## Licencia
Este proyecto está bajo la licencia [MIT](https://opensource.org/licenses/MIT).

---

### ¿Qué se hace generalmente para subir a GitHub?
1. Crear un repositorio en GitHub.
2. Inicializar git en tu proyecto (`git init` si no lo hiciste).
3. Agregar los archivos y hacer el primer commit:
   ```bash
   git add .
   git commit -m "Primer commit"
   ```
4. Agregar el remoto y subir:
   ```bash
   git remote add origin https://github.com/tuusuario/sistema-newjos.git
   git push -u origin master
   ```

¡Listo! Así tu proyecto estará disponible en GitHub para compartirlo con la comunidad.
