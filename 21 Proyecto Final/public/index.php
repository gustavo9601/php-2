<?php
/*
  * index.php -> Archivo que manejara todas las peticiones
  * De la aplicacion
 *
 * APP_PATH -> Es una contante que indica la raiz del archivo, ej : '../', definido en el archivo app.php
 *
 * */


require_once  '../config/app.php'; //Importando EL ARCHIVO DE CONFIGURAION, que conecta a los demas archivos
//require_once APP_PATH . '/views/pages/index.view.php';  // improtando el archivo index de vista


require_once APP_PATH . '/views/articles/index.view.php';  // improtando el archivo index de vista


// echo '<h1> Estamos en la tienda </h1>';


?>