<?php  // apertura de php

/*
 * php -v  // version
 * php -S localhost:puerto   // sube el servidor de php
  
 * */

// declaracion de variable, inician con $
$edad1 = 20;
$edad2 = 30;
// es keysensitive, reconoce entre mayusculas y minusculas

$nombre = 'gustavo';
$Nombre = 'adolfo';
// mostrando un texto
echo 'Suma de edad 1 + edad 2' , $edad1 + $edad2;

// array, de cualqueira de las 2 formas se puede mostrar
$miArray = [1,2,3];
$miArray2 = array(5,6,7,8);



// muestra el resultado de la operacion por consola
var_dump(5*3+9);
// retorna el reisudo de una division
echo 'Usando el modulo % = ', $edad1 % 2;


$sumando1 = 2;
echo ' inicial = ' , $sumando1;
$sumando1++ ; 
echo ' sumando 1 = ', $sumando1;
$sumando1 += 3;
echo ' sumando 3 = ', $sumando1;



// usando comillas dobles, cuando pasamos variables

echo " Bienvenido $nombre";

phpinfo(); // muestra informacion del servidor


?>  <!--cerrando la etiqueta-->