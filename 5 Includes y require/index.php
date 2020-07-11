<?php  


/*
include
Incluye y evalua el archivo especificado.

- Cuando se incluye un archivo, el codigo hereda el ambito de las varaibles en la linea que ocurre la inclusion

- no se puede incliu 2 veces el mismo archivo

*/

//include 'nombre o ruta del archivo'
include 'suma.php';  // accdemos al archivo suma.php

$resultado = suma( 2,5 ); // funcion que esta en el archivo suma.php
var_dump( $resultado );


/*
include_once , evaluea que si ya se inserto el mismo archivo, seleccione el primero y no genera error
*/
include_once 'resta.php';
$resultado2 = resta( 100, 50 );
var_dump( $resultado2 );



/*
require, 
si genera error detiene la ejecucion de la aplicacion, pero cumple la misma funcion de include
*/
require 'multiplicacion.php';
$resultado3 = multiplicacion( 5 , 80 );
var_dump( $resultado3 );

/*
requiere_once
si se incluye dos veces el archivo ejecuta el primero y no detiene la app
*/
require_once 'multiplicacion.php';
$resultado4 = multiplicacion( 5555 , 80 );
var_dump( $resultado4 );

?>




