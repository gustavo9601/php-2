<?php declare( strict_types = 1 ); // hace que el lengujae sea estricto

function bienvenida(){
    
    $nombres = func_get_args();
    
    // froaeach sobre los parametros que pasemos a la funcion
    
    foreach ( $nombres as $nombre ){
        echo "Bienvenido, {$nombre}. \n";
    }

}

echo "\n **** Bienvenida 1 **** \n";
bienvenida( 'Gustavo' , ' Sergio' );


// de esta forma nos sabemos los parametros que recibe,
// capturamos en un array todo lo que se pase
function bienvenida2(...$nombres){
    
    // froaeach sobre los parametros que pasemos a la funcion
    
    foreach ( $nombres as $nombre ){
        echo "Bienvenido, {$nombre}. \n";
    }

}


echo "\n **** Bienvenida 2 **** \n";
bienvenida2( 'Gustavo' , ' Sergio', 'Melissa' );


// indicandole el tipo de dato que va a recibir la funcion
function sumaDeEnteros( int ...$enterosASumar ){
    return array_sum( $enterosASumar );
}

echo '**************************' .PHP_EOL;
echo 'La suma de enteros = ' . sumaDeEnteros( 4,5,6,8 ) . PHP_EOL;


?>


