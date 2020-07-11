<?php 
//invocando al archivo
require_once 'index.php';
//instancia de la clase
$fabrica = new Fabrica();

$mesa1 = $fabrica->fabricarMesa( "Rojo" , 4 );
$mesa2 = $fabrica->fabricarMesa( "Cafe" , 8 );

// podemos visualizar que asignamos una funcion que contiene una clase anonima 
echo '*** OBJETO DE INSTANCIA' . PHP_EOL;
var_dump($fabrica);
    
echo '*** OBJETO MESA1' . PHP_EOL;
var_dump($mesa1) ;

echo '*****************************' . PHP_EOL;
echo "La mesa 1 es de Color = {$mesa1->getColor()} \n";
echo "La mesa 2 es de Color = {$mesa2->getColor()} \n";
echo 'La mesa 1 es de Color = ' . $mesa1->getColor() . 
     ' y tiene = ' . $mesa1->getPatas() . ' patas';  // otra forma de mostrar informacion
?>