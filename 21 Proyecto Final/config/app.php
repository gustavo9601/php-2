<?php
/**
 app.php -> Archiv ode configuracion central

 */


// definimos como contante la ruta como path que se posicionara en la razi del archivo
define('APP_PATH', __DIR__ . '/..');
// define la tura a la carpeta publica
define('PUBLIC_PATH' , '');
// define la ruta de las vistas
define('VIEWS_PATH' , '../views/pages/partials/');
require_once APP_PATH . '/vendor/autoload.php';

require_once 'env.php'; // Inportando el archivo que contiene la constante DATABASE
require_once  'database.php'; // importando el archivo de conexion a BD



?>