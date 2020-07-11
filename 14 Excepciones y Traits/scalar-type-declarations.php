<?php 

/**/
require_once 'BebidaException.php';

function beber( $bebida )
{
    if( $bebida == 'cerveza' )
    {
        // lanzamos una excepcion, en este caso la que creamos nosotros
        throw new BebidaException;
    }else
    {
        return "Bebiendo {$bebida}" . PHP_EOL;    
    }
}

echo beber( "juguito" );
echo beber( "cerveza" );


?>