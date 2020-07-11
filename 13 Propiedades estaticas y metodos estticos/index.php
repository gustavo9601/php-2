<?php 
// improto el archivo
require_once 'estaticos.php';
// llamo a la propiedad estatica SIN  crear instancia y con :: puntos
echo 'Nombre por defatul = ' . Padre::$nombre . PHP_EOL;
//Modicio publicamente el valor de nombre
Padre::$nombre = 'Melissa';

echo 'Nuevo nombre = ' . Padre::$nombre . PHP_EOL;


// llamnado a la funcion sestatica que no necesita instancia
Padre::prueba();


?>