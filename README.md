# Notas del Proyecto.

## Tecnologías y lenguaje usado:
- Back-end: PHP
- BBDD: Arrays temporales de sesion
- Front-end: Bootstrap y css custom
- VisualStudio Core

## Objetivo:
Crear una página web de montañismo funcional, con registro de usuarios y login de los mismos. Donde se pudiera ver el perfil del usuario y crear rutas de montañismo.

## Estructura de Carpetas:
*(Solo se incluyen las que se utilizan)*
**ESTA ESTRUCTURA SE ENCUENTRA DENTRO DE OTRA CARPETA LLAMADA DWES_PROYECTO_PHP**
- **Mountain-Climbing**
- - **assets**
  - - *css*
    - - style.css
  - - *img*
- - **config**
  - - config.php
- - **includes**
  - - auth_check.php
  - - footer.php
  - - functions.php
  - - header.php
- - **public**
  - - *climbing*
  - - *ferratas*
  - - *routes*
    - - create.php
    - - delete.php
    - - edit.php
    - - list.php
    - - view.php
  - - index.php
  - - login.php
  - - logout.php
  - - profile.php
  - - register.php
- - **uploads**
  - - *photos*
  - - *profile*

### Archivo de configuración config.php
*IMPORTANTE*
Por temas propios de organización y por problemas que estaba teniendo con las rutas, cree un alias en el servidor apache de xampp 
El alias que tengo en clase y el que tengo en casa es el mismo /franphp. Lo único "diferente", son las rutas (debido a la estructura de carpetas)
  - **En mi casa:** Alias /franphp "D:" (ya que la carpeta del proyecto está justo en D:/)
  - **En clase:** Alias /franphp "D:/FranGarciaEgea" (ya que la carpeta del proyecto está creada aqui dentro)

Dentro del archivo config.php esta definida una variable:
  define('BASE_URL', '/franphp/DWES_PROYECTO_PHP/Mountain-Climbing');
Para asegurarme de que las rutas funcionan correctamente.
Justo debajo de esa linea hay otra linea comentada con la que creo recordar que es la ruta 'básica' de xampp, con descomentar esa y comentar la que se está usando deberia bastar.
(Crear el 'BASE_URL' era la única forma que encontre de hacer funcionar todos los enlaces de forma correcta).

Este 'BASE_URL' se usa a lo largo de todo el proyecto, sobre todo en el header.php
