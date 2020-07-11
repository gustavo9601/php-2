<?php 

// llamamos el archivo index.php
require_once 'index.php';


// instancion de la calase Produto
$producto = new Producto();

// asiganamos valores a las propiedades de las instancia
$producto->nombre = 'camiseta de CSS';
$producto->talla = 'L';
$producto->precio = 1200;


// Acceder a las propiedades Y mostraralas
// PHP_EOL es un salto de linea
echo $producto->nombre . PHP_EOL;
echo $producto->talla . PHP_EOL;
echo $producto->precio . PHP_EOL;





// instancia 2 de Producto
$producto2 = new Producto();
// asignando valores a las propiedades
$producto2->nombre = 'camiseta de HTML';
$producto2->talla = 'XL';
$producto2->precio = 9200;
// Acceder a las propiedades y mostraralas
echo "Otro producto {$producto2->nombre}. \n";
echo "Otro producto {$producto2->talla}. \n";
echo "Otro producto {$producto2->precio}. \n";



// instancia 3 de prodcuto
$producto3 = new Producto();
// asginamos valores a las propiedades
$producto3->nombre = 'camisa de JS';
$producto3->talla = 'XS';
$producto3->precio = 847563.2;
// ejecutamos la funcion dentro de la clase
$producto3->resumen();


/************



NOTA EN ESTE ARCHIVO, SE INVOCA AL CONTRUCTOR SIN PASAR PARAMETROS
POR TAL MOTIVO DA ERROR, MIRAR instanciaProducto2.php


*/

?>