# LaunchX Despliegue de la práctica de CSS en Laravel

La práctica se implemento en el Framework Laravel y se subió al servidor. Consiste en una asociación civil para concientizar y agilizar el proceso de vacunación. Tiene paginas extras como un cazamitos, el paciente se debe de registrarse a un modulo de vacunación, una pagina de términos y condiciones, política de privacidad y un panel de administrador para administrar los módulos.

- [Pagina en el servidor compartido](https://pasteleria.celtech.com.mx/vacunas/).
- [Pagina del cazamitos](https://pasteleria.celtech.com.mx/vacunas/cazador-de-mitos).
- [Pagina para registrarse a un modulo](https://pasteleria.celtech.com.mx/vacunas/reservar-lugar-para-tu-vacuna/m00122).
- [Pagina de términos y condiciones](https://pasteleria.celtech.com.mx/vacunas/terminos-y-condiciones).
- [Pagina de política de privacidad](https://pasteleria.celtech.com.mx/vacunas/politica-de-privacidad).
- [Pagina de panel de administrador (Se debe de iniciar sesión)](https://pasteleria.celtech.com.mx/vacunas/admin).
- [Repositorio donde se encuentra la práctica en HTML y CSS](https://github.com/GerardoCabreraH/FrontEndMisionCSS).

Implementación al servidor local
- Descargar o clonar el repositorio
- Instalar los paquetes de Composer: `composer install`
- Copiar el archivo de ejemplo de variables de entorno `cp .env.example .env` 
- Generar una clave de la aplicación: `php artisan key:generate` 
- Crear una base de datos mediante MYSQL
- Migrar las tablas de la aplicación a la base de datos recién creada y se llenaran con los datos de ejemplo `php artisan migrate --seed`. 

Cuenta demo para entrar al sistema de administración

- Email: `admin@correo.com` 
- Contraseña: `123administrador456` 

Redes:
* GitHub: [GerardoCabreraH](https://github.com/GerardoCabreraH)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

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
