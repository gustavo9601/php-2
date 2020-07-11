<?php 

class Padre{
    // CONST nombVariable = valor;
    const GENERO = 'Masculino';
    const EDADES = [10,20,30];
}


/*Defino el valor de variables constantes
que no pueden ser redifinadas y no necesita el $
*/
define( 'PI' , 3.1245 );


echo PI . PHP_EOL;


$miPadre = new Padre;
echo 'La constante GENERO de Padre es = ' . $miPadre::GENERO . PHP_EOL ;

echo ' Las edades del la constante edades ARRAY = '
    . $miPadre::EDADES[2] . PHP_EOL;
// Indico la posicion del array de la constante a mostrar
?>