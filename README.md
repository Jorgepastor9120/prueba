# prueba

LENGUAJES Y FRAMEWORKS USADOS:

Aplicación se ha realizado con PHP 8 y MySQL (10.4.27-MariaDB). Como framework para el Front he utilizado Bootstrap y FontAwesome para los iconos vectoriales.

ESTRUCTURA DE LA APLICACIÓN: 

Vistas principales: Dos vistas, para el formulario de registro y la gestión de la cuenta.

-index.php: Página principal con formulario de registro y de inicio de sesión.

-cuenta.php: Pagina con las vistas para actualizar la información de usuario y para la gestión de tareas.
  
Config: carpeta para las configuraciones de la aplicación. Al ser una aplicación pequeña solo consta de un archivo.

-conexion.php: Conexión con la base de datos y consultas a la misma.
  
Partials: carpeta con las vistas de las sub-paginas.
-nav.php: Menú de navegación. Si el usuario ha iniciado sesión se mostrarán los enlaces hacia la cuenta y para cerrar sesión.
-datos-cuenta.php: Formulario para actualizar datos del usuario.
-tareas-cuenta.php: Listado de de tareas, desde aqui se pueden eliminar y actualizar.
-tareas-edicion.php: Formulario para actualizar una tarea.
  
Forms: Carpeta con los archivos de modificación de la base de datos.
-Form-usuarios.php: Para crear usuarios y actualizar su información.
-Form-tareas.php: Para la gestión de tareas (crear, actualizar y eliminar).
  
Assets: Para los archivos estáticos css y js.
  
*Nota: Las acciones dentro de los archivos Form-* se separan mediante una variable tipo GET ($_GET['action'].
 
.htaccess: Archivo de configuración de urls y redirecciones.
 
ingeteam.sql: Archivo para crear la base de datos y sus tablas.
 
 
CONTROL DE ERRORES Y VALIDACIÓN DE DATOS:

-Al iniciar la aplicaión comprueba la conexión a la base de datos.
-Al crear un usuario la aplicación comprueba que el mail no está ya registrado, sino devuelve un error.
-Al crear un usuario la aplicación comprueba que los datos introducidos son válidos.
-Al iniciar sesión comprueba que mail y contraseña existen y corresponden a un usuario.
