<?php 
// invocando el archivo
require_once 'Gato.php';
// creando la instancia de clase Gato
$miGato = new Gato;
// con el objeto miGato invoco a las funcion comer y hablar
echo $miGato-> comer( 'Pollito sadao' ) . PHP_EOL;
echo $miGato-> hablar() . PHP_EOL;


?>