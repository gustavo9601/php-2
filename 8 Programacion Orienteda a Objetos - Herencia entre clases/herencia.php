<?php

require_once 'hijo.php';


// instancia de la clase extendida Hijo
$miHijo1 = new Hijo( 'Adolfo' );


echo 'Mi nombre es : ' .$miHijo1->nombre . PHP_EOL
        . 'Mi apellido es : ' . $miHijo1->apellido . PHP_EOL;

// meter dentro de una funcion el valor de la porpiedad privada y retornarala en una funcion, es lau unica forma de obtener el valor de esa propeidad
echo 'El secreto es -> ' . $miHijo1->retornaSecreto() . PHP_EOL;

// accedo a la propeirdad privada desde la funcion que lo retorna
echo 'La cedula, retornada desde la Funcion es -> ' 
    . $miHijo1->getCedula() .PHP_EOL ;

// modificnado el valor de la cedula con la funcion setCedula();

$miHijo1->setCedula( 58452666 ); // llamo al metodo y le paso por parametro la nueva cedula

echo 'La nueva cedula despues de modifcar es -> ' 
    . $miHijo1->getCedula() .PHP_EOL ;


?>