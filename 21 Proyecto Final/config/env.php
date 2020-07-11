<?php

/*
 * env.php -> Archivo en cargadao de crear una contante donde
 * escpeficando losparametros de conexion a la BD
 *
 * */
/*
Creamo suna constante
la cual llamara la base de datos y conectara con la BD

*/
define('DATABASE', [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'tienda',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);


?>