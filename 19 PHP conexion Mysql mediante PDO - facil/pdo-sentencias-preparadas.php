<?php 
try{

    // creamos un objeto de PDO, con los siguientes paramentros
    $conexion_pdo = new PDO(
        'mysql:host=127.0.0.1;dbname=inventario',
        'root',
        ''
    );

    // creamos un sql , lo preparamos y lo ejecutamos
    $sql2 = 'TRUNCATE TABLE producto_simple';
    $sentencia2 = $conexion_pdo->prepare( $sql2 );
    $sentencia2->execute();


    // Preparar
    $sql = 'INSERT INTO producto_simple (nombre,costo) VALUES (:nombre, :costo)'; // con mysql seria (?,?) con pdo, anteponemo sdos puntos y cualquier nombre

    // varaible que prepara el sql
    $sentencia = $conexion_pdo->prepare( $sql );

    //Vincular
    // es necesario uno a uno, y le saigamos con binParama, para cada columna una variable
    $sentencia->bindParam( ':nombre', $nombre );
    $sentencia->bindParam( ':costo', $costo );


    // Ejecutar
    // varaible que se insertaran 
    $nombre = 'Camista de HTML';
    $costo = 54444;
    $sentencia->execute(); // ejecutamos la sentencia



    $nombre = 'Camista de Js';
    $costo = 754448474;
    $sentencia->execute(); // ejecutamos la sentencia




    /***********************************************/
    // pdo de forma mas corta sin tener que vincular

    // CREAMOS EL SQL
    $sql3 = 'INSERT INTO producto_simple (nombre,costo) VALUES ( :nombre,:costo )';

    // PREPARAMOS EL SQL
    $sentencia3 = $conexion_pdo->prepare( $sql3 );

    //LE PASAMOS UN ARRAY CON LOS VALORES DE LAS LLAVES DEL SQL, dentro del execute
    $sentencia3->execute( [
        ':nombre' => 'Camiseta de PHP',
        ':costo' => 500000
    ] );

    $sentencia3->execute( [
        ':nombre' => 'Camiseta de PERL',
        ':costo' => 70000
    ] );


    /**********************************************/
    //sustitcuion de parametros en querys


    // creamos el sql indicando la susticcipn con ?
    $sql4 = "SELECT id, nombre, costo FROM producto_simple WHERE nombre LIKE ? AND costo > ? ";

    // preparamos el query 
    $sentencia4 = $conexion_pdo->prepare( $sql4 );


    // ejecutamos el query, y le pasamos por parametro las varaibles por sustitucion
    $sentencia4->execute( [
        '%S',
        70000
    ] );



    // asignamos LA SENTENCIA, que ya ejecuto el query a la varaible resultado, y con la funcion fetchAll nos devuelve los valores en un ARRAy
    $resultado = $sentencia4->fetchAll();  
    // RECORRIENDO LOS VALORES DEVUELTOS FILA A FILA
    foreach( $resultado as $fila ){
        echo " Producto = {$fila['nombre']} , cuesta = {$fila['costo']}" . PHP_EOL;
    }


    /**************************************************/
    //Actualizacion

    // creamos el query
    $sql5 = "UPDATE producto_simple SET costo = :costo WHERE ID = :id ";

    // preparamos el query
    $sentencia5 = $conexion_pdo->prepare( $sql5 );

    // ejecutamos y le pasamos por paramentro lo que solicita
    $sentencia5->execute([
        ':id' => 2,
        ':costo' => 99999999
    ]);

    /********************************************************/
    //Eliminacion
    $sql6 = "DELETE FROM producto_simple WHERE id = :id";

    $sentencia5 = $conexion_pdo->prepare( $sql6 );

    $sentencia5->execute( [
        ':id' => 3
    ] );

    // capturamos el error de tipo PDOException   
}catch( PDOException $e ){
    echo 'Error : ' .$e->getMessage() .PHP_EOL;
}finally{

    // cierra o finaliza la conexion
    $conexion_pdo = null;

}

?>