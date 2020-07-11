<?php 
// llamo al archivo
require_once 'index.php';
// creo la instancia de la clase y le paso los parametros que solicita
$producto1 = new Producto( 'Camisa PHP', 'XL', '85422' );
$producto1->resumen();

// instancia 2
$producto2 = new Producto( 'Camisa JS', 'S', 9.85422 );
$producto2->resumen(); // llamo a la funcion

echo '** Accdediendo al nombre de los productos ***' . PHP_EOL;
echo 'Nombre del producto = ' . $producto1->nombre . PHP_EOL;
echo 'Nombre del producto = ' . $producto2->nombre . PHP_EOL;


?>