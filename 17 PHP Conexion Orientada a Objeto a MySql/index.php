<?php 

/*Conexion con MYSQL orientado a objetos*/

// 1. Conexion
/*
Creamos una instancia de la clase mysqli propia de PHP, y le pasamos los parametro de la conexion
*/
$conexion_mysqli = new mysqli( '127.0.0.1','root','','inventario' );


// 2 .Verficiar la conexion
/*
Como se creo un objeto de clase,
accedemos directamente a la funcion
connect_errno
que nos devolvera un Boolean de acuerdo al estado la conexion
*/
if( $conexion_mysqli->connect_errno ){
    // para ver el error usamos el objeto y accedemos a la funcion connect_Error, que devolvera el error
    echo 'No se pudo conectar error ' . $conexion_mysqli->connect_error . PHP_EOL;
}else{
    echo ' Conexion Existosa' . PHP_EOL;
}



// 3. query o consulta
// creamos una varaible donde guardamos el query
// usamor el objeto y accdemos a la funcion query
$resultado = $conexion_mysqli->query( "SELECT nombre_producto, cantidad FROM compra_producto" );


// 4. mostrar
// con la funcion fetch_assoc() devuelve el query, y se guarfara registro a registro en la variable $fila 
while( $fila = $resultado->fetch_assoc() )
{
    echo 'Producto = ' . $fila['nombre_producto'] . ' Se Compro = ' . $fila['cantidad'] .PHP_EOL;
}

// 5. liberar memorai
$resultado->free();

// 6. cerrar conexion
$conexion_mysqli->close();

?>