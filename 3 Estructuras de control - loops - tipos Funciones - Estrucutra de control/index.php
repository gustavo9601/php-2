<?php 

/*********Ciclos*******************************************
*/

// while
$contador = 0;

while( $contador < 10 ){
    echo "Imprimiendo en WHILE, Numero {$contador} .\n" ;  // el salto solo se ve en la consola
    // mostrando el contador
    $contador ++;
}


// do while

$contador2 = 0;

do {
    echo "Imprimiendo en DO WHILE, Numero = {$contador2}.\n";
    $contador2++;

}while( $contador2 <10 );



//for

for( $contador3 = 0; $contador3 < 10 ; $contador3 ++ ){
    echo "Imprimiendo en FOR, Numero = {$contador3}.\n ";
}



//         FOR EACH  -> recorre arreglos o objetos


$arrayPrueba = [
    1,
    2,
    3,
    'Dato',
    'Venta'
];

// forma 1
foreach( $arrayPrueba as $recorreArray ){
    // as, recorreArray es en la que se va a guardar el valor de cada iteracion
    echo "Lo que contiene el array = [{$recorreArray}] .\n";
}


// forma 2
foreach( $arrayPrueba as $posicion => $contenido ){
    //podemos capturar la posicion 
    // => a la posicion le asignamos la variable que contendra los valores por posision
    echo "Posicion = [{$posicion}], contenido = [{$contenido}] . \n ";
}

// forma 3
/*
    : --> {} apertura del foreach
    endforeach   --> fianlizo el foreach
*/
foreach( $arrayPrueba as $posicion2 => $valor ):
echo "Posicion [{$posicion2}] = {$valor}; \n";
endforeach;



/********************************************************/
/*Estruturas de control
Braeak  -> finaliza el ciclo
Continue -> hace que continue el ciclo , pero en la posicion actual no la muestra ya que la SALTA
*/


for( $c = 0; $c < 10; $c++ ){


    if( $c == 5){
        continue;
    }

    if( $c == 7 ){
        break;
    }
    echo "Imprimiendo Posicion [$c].\n";
}


/**************************************************************/
/*funciones*/

// 1. funcion normal
function saludar(){
    echo "\n Hola mi nombre es Gustavo";
}

// invocando a la funcion
saludar();


// 2.  funcion que retorna algo
function saludar2(){
    return "Retornando algo ";
}

$valorRetornado = saludar2(); // asigno el valor de la funncion a una variable

echo "Mostrando el valor retornado {$valorRetornado} \n"; 
var_dump( saludar2() );

// 3. funcion con parametros

function saludar3( $nombre )
{
    return "\n Hola {$nombre} como estas ? \n";
}

echo saludar3( "Gustavo" );  // incoco a la funcion u le paso el parametros
echo PHP_EOL;   // es un salto de linea;


// 4. funcion sin pasar parametros, por que no se sabe cuantos son

function bienvenida(){
    $saludo = func_get_args();  
    // fun_get_args(); -> captura en la variable todos los parametros que se pasen a la funcion

    foreach( $saludo as $posicion2 => $valor2 ){
        // un foreach para recorrer el array con los parametros apsados 
        echo "Posicion [{$posicion2}] Bienvenido usuario = {$valor2} \n";
    }

}

// invocando la funcion
bienvenida('gustavo','melissa','martha');


/*
Type hinting
Podemos espcificar el tipo de dato que recibimos como parametro
de lo contraio devolvera error
*/

// 5. le especificamos el tipo de datos que quermoes recibir
function recibeParametros( array $nombresParamatro )
{
    foreach( $nombresParamatro as $nombre ){

        echo "Hola  {$nombre} -";
    }
}

// invocando la funcion , pasandole un array
recibeParametros( ['Gustavo','Pedro','Sebastian'] );



//Clousures  -> funciones anonimas, que no tienen nombre
// 6. Funciones anonimas

$variable =  function (){
    echo "\n Soy una funcion anonima \n";
}; //deben terminar en ;

//invocando a la funcion anonima guarda en la variable
$variable();


// 7. pasando funciones anonimas a otra funcion
// si queremos poenomos Closure para saber que recivimo suna funcion anonima, pero NO es necesario

function arimetica(Closure $operacion, $numero1, $numero2 ){
    // $operacion es una funcion, por tal razon ponemos los ()
    // pasamos los parametros retqueridos
    $result =  $operacion( $numero1, $numero2 );
    echo "\n ** Resultado = " . $result . " ** \n";
}

// funcion anonima guadarada en una variable
$sumar = function( $numero1, $numero2 ){
    return $numero1 + $numero2;
};

// funcion anonima guadarada en una variable
$resta = function( $num1, $num2 ){
    return $num1 - $num2;
};


arimetica( $sumar, 50, 100 );
arimetica( $resta, 50, 100 );


?>







