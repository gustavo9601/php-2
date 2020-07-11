<?php 

/*Conexion con PDO
API homogenea de PHP
*/

// encerramos dentro de un try cath
try{

    // creamos un objeto de PDO, con los siguientes paramentros
    $conexion_pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=inventario',
        'root',
        ''
    );


    // creamos el query
    $sql = 'SELECT nombre, cantidad FROM producto';
    // creamos una variable reusltado donde alamcenaremos lo que devuelve el query, parasanquer el sql
    $resultado = $conexion_pdo->query( $sql );

    // con un foreach recorrermos una a uno los registros devueltos
    foreach( $resultado as $fila ){
        // se comporta como array
        echo "{$fila['nombre']} Cantidad = {$fila['cantidad']} . \n";
    }


    // capturamos el error de tipo PDOException   
}catch( PDOException $e ){
    echo 'Error : ' .$e->getMessage() .PHP_EOL;
}finally{

    // cierra o finaliza la conexion
    $conexion_pdo = null;

}




?>