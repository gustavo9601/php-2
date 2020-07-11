<?php

/*Archivo encargado de importar el ORM*/


/*Datos propios del ORM, para generar la conexion a la BD*/

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    
    /*  =>  USAMOS LA CONSTANTE DATABASE del archivo env.php
    
        ACCEDEMOS A LOS ELEMENTOS COMO ARRAY []
        CON EL OPERADOR TERNARIO PREGUNTAMOS QUE SI TIENE INFORMACION DEJE LA ACTUAL DE LO CONTRARIA ASIGNALE ESOO...*/
    'driver'    => DATABASE['driver'] ?? 'mysql',
    'host'      => DATABASE['host'] ?? 'localhost',
    'database'  => DATABASE['database'] ?? 'tienda',
    'username'  => DATABASE['username'] ?? 'my-username',
    'password'  => DATABASE['password'] ?? 'my-password',
    'charset'   => DATABASE['charset'] ?? 'utf8',
    'collation' => DATABASE['collation'] ?? 'utf8_unicode_ci',
    'prefix'    => DATABASE['prefix'] ?? '',
]);

// Se ejecuta
$capsule->bootEloquent();
