<?php 
// 'Hace que sea estricto el lenguaje de php'
declare(strict_types = 1 );


$variableGloabal = 10;

// funcion que le indicamos el tipo de dato que debe retornar
function suma(int $val1, int $val2) : int
{
    // le decimos a PHP que esta variable es de ambito o escope global
    global $variableGloabal; 
    return ( $val1 + $val2 + $variableGloabal );
}

echo "El resultado es = " . suma( 8,6 ) ;



?>