<?php


/*^***********************************************/
// concatenacion

$costo = 12;
/*
"" -> cuando vamos a insertar varible
'' -> cuando solo vamos a insertar texto
*/
$nombreProducto2 = "Cahqueta polo , costo = $costo";
var_dump( $nombreProducto2 );  // var_dump()  muestro por consola
$nombreProducto = 'Polo de CSS ';
// es buena practica usar { $varaible }, para saber que hay una variable
$nombreProducto3 = "Zapatos polo, costo = {$costo}";  
var_dump( $nombreProducto3 );




$nombre = 'Gustavo';
$apellido = 'Marquez';
// con el punto . , concatenmaos los string
var_dump( $nombre . ' ' . $apellido );


$val1 = '1';
$val2 = '2';
var_dump( $val1 + $val2 ); //php cpnvierte si puede los string a numerops y los suma, aunque no es recomendable


/**********************************************/
// arrays

// se puede de dos formas
// array(  elementos );
// [ elementos ];
$idiomas = array('Ingles','Español','Farances');
$lenguajes = ['HTML5','CSS','JS','PHP'];

var_dump( $idiomas );
var_dump( $lenguajes );

// pdoemos almacenar diferenctes tipos de datos

$arrayCompleto = [ $val1, $val2, $nombre, 'Prueba', 32.2];
var_dump( $arrayCompleto );

$ObtenidoValores  = $arrayCompleto[1];  // le asigno una posicion del array
var_dump( $ObtenidoValores );

// ARRAY DEFINIENDO las llaves
// las llaves tienen que ser string
// podemos acceder desde el alias que pusimos a las posiciones

$numeros = [
    'uno' => 5,
    'dos' => 52,
    'tres' => 3,
    'letras' => 'Holaa'
];

var_dump( $numeros );
var_dump( $numeros['uno'] ); // accediendo a la llave creada por nosotros del array

// asignando valores por psosicon fija
$arrayVacio = [];
$arrayVacio[0] = 'Nombre';
$arrayVacio[1] = 'Apellido';

var_dump( $arrayVacio );


/********************************************************/
// matrz, arrays dentro de arrays
$matriz = [
    'misNombres' => ['gustavo','melissa','martha'],
    'colores' => ['rojo','verde'],
    'costos' => [3000,200]
];

var_dump( $matriz );
// accediendo a posiciones internas de lso arrays
var_dump( '$matriz["misNombres"][2] = ' . $matriz['misNombres'][2] );
var_dump( '$matriz["costos"][0] = ' . $matriz['costos'][0] );


// matriz con posiciones propias del lenguajes
$matrizNumerica = [
    [1,2,3,4],
    [10,20,30],
    [100,200,300]
];
    
var_dump( $matrizNumerica );
var_dump( 'Poscion de la matriz $matrizNumerica[0][2] = ' . $matrizNumerica[0][2]  );
var_dump( $matrizNumerica[1][2] );


/***********************************************/
// Casting -> Convertir un tipo de datos a otro

$variable1 = '2';
var_dump( $variable1 );

// convierto el string a entero
$variable1 = (int) $variable1;
var_dump( $variable1 );


// converito el entero a float
$variable1 = (float) $variable1;
var_dump( $variable1 );

//sobreescribiendo el valor
$variable1 = 85.235;
$variable1 = (string) $variable1;
var_dump( $variable1 );

// de string a array, pero solo crea una posicion de una array con el valor
$variable1 = (array) $variable1;
var_dump( $variable1 );
    

/**********************************************************/
// condicionales

/*
 *
 * < Menor que
 * > Mayor que
 * <= Menor o igual que
 * >= Mayor o igual que
 * == Igual que
 * != no es igual a
 * === idéntico a
 * !== no es idéntico a
 * <> es diferente de
*/

$condicion = true;
$suma = 5 + 7;

if ( $condicion and $suma >100 ){
   echo 'Es true y suma > 100';
}elseif ( $condicion and $suma === 12 ) {
    echo 'Es true y === 12';
}else{
    echo 'No acerto en ninguna';
}


/***********************************************************/
// switch case

$opcion = 2;



switch ($opcion){
    case 1:
            var_dump('Es la opcion 1');
        break;
    case 2:
            var_dump('Es la opcion 2');
        break;
    default:
        var_dump("No es ninguna de las opciones");   
}


/************************************************************/
// operadores logicos

/*

and  || &&   ->  y
or   || ||   ->  o
!            -> negacion
xor          -> devuelve true si alguno es true, no ambos

*/

/*
Operador de nave espacial

<=>
*/

var_dump( 1 <=> 1 );    // 0   // si son iguales
var_dump( 1 <=> 2 );    // -1   // si el de la izquierda es menor al de la derecha
var_dump( 2 <=> 1 );    // 1    // si el de la izqueirda es mayor al de la derecha



/*Operador ternario

Condicional acrotado igual al de javascript

( condicion ) ? 'Si es true' : 'Si es false';
*/

$letra = 'A';
$validacion = ( $letra == 'A' ) ? 'Validaicon quedo true' : 'Validacion quedo false';
var_dump( $validacion );



/*

Funcion isset
Determina si una varaible esta definida y no es null

?? valida que exista el valor, de no exister y ser null asigna del lado derecho

$varaible ?? 'Me asignarosn por que es null';
*/

var_dump( isset( $varaibleNoDefinida ) );  // false ya que no existe la variable
var_dump( isset($letra) ); // true por si existe y no es null

$validacion2 = ( isset($letra) ? 'Si existe la variable' : 'No existe la varaible' );
var_dump( $validacion2 );

$validacion3 = ( $letras ?? 'Me asginaron por que $letra No exsite o es null' );
var_dump( $validacion3 );









