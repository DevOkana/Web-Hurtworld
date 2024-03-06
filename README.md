# Guía de Configuración del Sistema de Juego Hurtworld

Esta guía explica cómo configurar el sistema de juego Hurtworld, que incluye una serie de scripts PHP para manejar aspectos como la autenticación de usuarios, la recuperación de contraseñas, la obtención de información de jugadores, entre otros.

- **Descripción:**
Este proyecto fue diseñado para un juego local con una comunidad de 40 jugadores. Se creó una plataforma web capaz de interactuar con una base de datos de Steam localmente para la gestión de usuarios, permitiendo la creación de cuentas, inicio de sesión y recuperación de contraseñas a través del correo electrónico asociado. Dado que cada usuario tenía una IP estática asignada, la validación de la cuenta se realizaba verificando esta IP.

La plataforma incluía funcionalidades como la visualización del número de usuarios registrados y en línea, los plugins y mods utilizados en el servidor, así como una galería de imágenes del juego. El backend, implementado en PHP, gestionaba todas estas operaciones.

El registro de usuarios se validaba en tiempo real utilizando jQuery para verificar la disponibilidad del nombre de usuario y correo electrónico, así como la coincidencia de contraseñas. En caso de olvido de la contraseña, los usuarios podían recuperarla mediante su correo electrónico, siempre y cuando la IP asociada fuera correcta.

La plataforma también ofrecía la descarga de mods del juego, incluyendo el KeyMac (software para detectar trampas e inyecciones en el juego), el cliente de Steam y el juego comprimido. Los usuarios tenían acceso a un panel donde podían ver información como la fecha y hora de creación de la cuenta, último inicio de sesión, ID de Steam, plataforma y navegador utilizados, así como la IP de acceso.

Se incluía un apartado de noticias donde se publicaban correcciones del juego y anuncios relevantes. Además, se mostraba una barra que indicaba el porcentaje de ocupación del mapa, con el objetivo de evitar la sobrecarga del servidor y otros problemas relacionados.

La plataforma permitía cambiar la contraseña del usuario, actualizando la base de datos de Steam correspondiente, y contaba con un sistema de respaldo para evitar la corrupción de datos. También se implementó un sistema para la descarga programada de mods, evitando posibles pérdidas de paquetes durante el juego.

Para el control del servidor, se utilizó PHP como backend junto con MySQL para la gestión de datos, y JavaScript para la validación de formularios y ventanas modales.


## Requisitos Previos

- Servidor web con soporte PHP (se recomienda Apache o Nginx).
- Base de datos SQLite3.
- Archivos del juego Hurtworld instalados y configurados correctamente.
- Conocimientos básicos de PHP y gestión de bases de datos.
- Tiene todas la librerias como bootstrap descargadas porque era un server que no tenía acceso a internet.

## Configuración

1. **Instalación de los Archivos PHP:**
   - Coloca todos los archivos PHP proporcionados en el directorio adecuado de tu servidor web. Asegúrate de que los permisos de archivo y directorio estén configurados adecuadamente para que el servidor web pueda acceder a ellos.

2. **Configuración de las Bases de Datos:**
   - Crea las bases de datos SQLite3 "Hurtworld.db3" en la carpeta db hay un ejemplo de como puede ser esta tabla
   - Dar la ruta donde esta la base de datos SQLite3 "TINserver.users.db3" y "TINserver.cmserver.db3" del Steam.
   - Asegúrate de que las bases de datos estén configuradas correctamente y sean accesibles desde los scripts PHP.
   

3. **Configuración de las Variables de Entorno:**
   - En cada archivo PHP, asegúrate de ajustar las rutas de las bases de datos y otras variables según tu configuración en los archivo:
    - recuperandoemail.php -> incluir la ruta de la base de datos de "Hurtworld.db3" por defecto esta en esa ruta "../db/Hurtworld.db3"
    - recuperar.php -> incluir la ruta de la base de datos de "Hurtworld.db3" por defecto esta en esa ruta "../db/Hurtworld.db3"
    - registro.php -> incluir la ruta de la base de datos de "Hurtworld.db3" y "TINserver.users.db3" por defecto esta en esa ruta "../db/Hurtworld.db3", "../db/TINserver.users.db3" respectivamente, el caso de TINserver.users.db3 debes de darle la ruta donde esta dicha base de datos en el steam
    - RevisarEmail.php -> incluir la ruta de la base de datos de "Hurtworld.db3" por defecto esta en esa ruta "../db/Hurtworld.db3"
    - revisarnombre.php ->  incluir la ruta de la base de datos de "Hurtworld.db3" y "TINserver.users.db3" por defecto esta en esa ruta "../db/Hurtworld.db3", "../db/TINserver.users.db3" respectivamente, el caso de TINserver.users.db3 debes de darle la ruta donde esta dicha base de datos en el steam
    - revisarpassword.php -> incluir la ruta de la base de datos de "TINserver.users.db3" por defecto esta en esa ruta "../db/TINserver.users.db3"
    - server.php -> incluir la ruta de la base de datos de "TINserver.cmserver.db3" por defecto esta en esa ruta "../db/TINserver.cmserver.db3" es para ver la telemetría del server.
    - la carpeta para que se vea las descargas debe de estar en esta ruta WebHurtworld\Hurtworld\view\user\profiles\descargas, pero puedes modificar la ruta en el archivo WebHurtworld\Hurtworld\view\user\profiles\connexionmods.php que contine la ruta de los mods

4. **Configuración del Servidor Web:**
   - Asegúrate de que tu servidor web esté configurado correctamente para ejecutar PHP y acceder a las bases de datos SQLite3.
   - En caso de usar xampp deberías activar la extensión extension=php_sqlite3.dll

## Uso

1. **Autenticación de Usuarios:**
   - El script `login.php` maneja el proceso de inicio de sesión de los usuarios. Ajusta las consultas SQL según sea necesario para adaptarse a tu esquema de base de datos.

2. **Recuperación de Contraseñas:**
   - El script `check_old_password.php` verifica si la contraseña antigua proporcionada coincide con la contraseña almacenada. Asegúrate de ajustar las consultas SQL según sea necesario.

3. **Obtención de Información de Jugadores:**
   - Varios scripts como `player_info.php` y `detect_browser.php` obtienen información detallada sobre los jugadores conectados al servidor de juego. Ajusta las consultas SQL según sea necesario.

## Consideraciones Importantes

- **Seguridad:** No cuenta con medidads de serguridad ya que fue una de mis primeros trabajo cuando aprendí a programar y era una web para dar soporte local, puede tener muchas vulneravilidades como SQL inyection entre muchas más.

- **Mantenimiento:** Este sistema se puede complementar con otro software que fue diseñado para el ya que guarda las base de datos y el mapa del juego con una periodicidad en carpetas dejando claro la hora y el día. Pienso ir arreglando a lo largo del tiempo, porque puede servir para cualquier game que sea en local con un server de steam, como lo son el DayZ o el Rust.

## Galería
![Login](fotos/Login.jpg)
![cambiar_contraseña](fotos/cambiar_contraseña.jpg)
![cambiar_contraseña](fotos/cambiar_contraseña.jpg)
![descargas_web](fotos/descargas_web.jpg)


## Contribuciones

Las contribuciones son bienvenidas. Si encuentras algún problema o tienes alguna sugerencia de mejora, no dudes en abrir un issue o enviar un pull request en el repositorio correspondiente.

---

