
# Lara SUU

LaraSUU provee lo necesario para realizar login, con el sistema SUU y laravel. 


## Authors

Coordinación de Geomatica.
- [jose.regalado@irapuato.gob.mx]


## Installation

Descarga e instala el paquete

```bash
  composer require tig-irapuato/larasuu
  php artisan larasuu:install
  php artisan vendor:publish
```

Selecciona el provider del paquete TIGIrapuato\LaraSUU\LoginSUUProvider

## Environment Variables

Para correr corectamente, debes agregar las siguientes variables en tu archivo .env

`SUU_URL`


## Documentation

Definir ruta de inicio de sesión exitoso y fallido

En config/authsuu.php 
redirect_succes se agrega la ruta de logeo exitoso
redirect_fail se agrega la ruta de logeo fallido


Ruta por default para iniciar sesión, se encuentra en routes\auth.php
suu.login para iniciar sesión
## Obtener datos de sesión

Para obtener datos de la sesión importamos el paquete
use TIGIrapuato\LaraSUU\Session\SUUSession.

Los metodos dispnibles son:


- getUserName
- getEmail
- getRoles


Ejemplo
```bash
  SUUSession::getEmail();

  
```