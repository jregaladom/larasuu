
# Lara SUU

LaraSUU provee lo necesario para realizar login, con el sistema SUU y laravel. 


## Authors

Coordinación de Geomatica.
- [jose.regalado@irapuato.gob.mx]


## Installation

1. Descarga e instala el paquete

```bash
  composer require tig-irapuato/larasuu
  php artisan larasuu:install
```

2. Selecciona el provider del paquete TIGIrapuato\LaraSUU\LoginSUUProvider
```bash
  php artisan vendor:publish
```

3. Agrega el service provider del menu de la platantilla en confi/app.php
```javascript
 'providers' => [
      App\Providers\MenuServiceProvider::class,
      ...
  ]
```

## Environment Variables

Para ejecutar corectamente, debes agregar las siguientes variables en tu archivo .env



Variables de conexión SUU

`DB_CONNECTION_SUU=`

`DB_HOST_SUU=`

`DB_PORT_SUU=`

`DB_DATABASE_SUU=`

`DB_USERNAME_SUU=`

`DB_PASSWORD_SUU=`


Variables de conexión de auth-tig

`DB_CONNECTION_AUTH=`

`DB_HOST_AUTH=`

`DB_PORT_AUTH=`

`DB_DATABASE_AUTH=`

`DB_SCHEMA_AUTH=`

`DB_USERNAME_AUTH=`

`DB_PASSWORD_AUTH=`

## Documentation

Definir ruta de inicio de sesión exitoso y fallido

En config/authsuu.php 
redirect_succes se agrega la ruta de login exitoso
redirect_fail se agrega la ruta de login fallido


Ruta por default para iniciar sesión, se encuentra en routes\auth.php
suu.login para iniciar sesión
## Obtener datos de sesión

Para obtener datos de la sesión importamos el paquete
`use TIGIrapuato\LaraSUU\Session\SUUSession`

Los metodos disponibles son:

- getUserName
- getEmail
- getRoles
- getSUUId

Ejemplo
```bash
  SUUSession::getEmail();
```