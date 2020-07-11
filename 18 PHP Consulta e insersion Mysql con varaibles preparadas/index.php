
<?php 

/* Conectar */
$mysqli = new mysqli('127.0.0.1', 'root', '', 'inventario');

/* Verificar la conexión */
if ( $mysqli->connect_errno ) {
    echo 'Falló al conectar a MySQL: ' . $mysqli->connect_error . PHP_EOL;
}else{
    echo 'Conexion exitosa' . PHP_EOL; 
}
    
// Preparar la consulta
$sql = "INSERT INTO producto (id, nombre, cantidad, fecha_ing, fecha_sali, valor_inicial, valor_final, iva) VALUES (? ,? ,? ,? ,? ,? ,? ,? )";  // para prevenir injection sql despues pasaremos los parametros


// asiganmos una varaible,l a funcion prepare, y le pasamos la variable $sql con el query
$sentencia = $mysqli->prepare( $sql ); // devuelve un boolean

// preguntamos si no da falso
if (!( $sentencia )){
    echo "Fallo la preparacion :({$mysqli->errno}) {$mysqli->error}." . PHP_EOL;  // mostramos el error
}


//Vincular los parametros ? ? , le asignaremos un valor con cada variable al query sql
$id = 1210 ;
$nombre = 'Carrito' ;
$cantidad = 500 ;
$fecha_ing = '2016/12/31' ;
$fecha_sali = '2016/12/31';
$valor_inicial = 875555;
$valor_final = 90000;
$iva = 16;

/*
Tipos de dato para bind_param
i entero
s string
d dobule
b blob

*/

//validamos lso datos que asginaramos a cada parametro de la varaible sql, (?,?,?), y preguntamos si no devuleve falso
// bind_param('indicamos con el tipo de dato cada parametro pegado' )
// lueo pasamos las varaibles por paraemtro
if( !($sentencia->bind_param( 'isissddi', $id, $nombre, $cantidad, $fecha_ing, $fecha_sali, $valor_inicial, $valor_final, $iva )) ){
    echo "Fallo la vinculacion: \n ({$mysqli->errno}) {$mysqli->error}." . PHP_EOL ;
}

// Ejcutar la accion
// ejecutamos la sentencia con $sentencia->execute();
if( !($sentencia->execute()) ){
    echo "Fallo la ejecucion: ({$mysqli->errno}) {$mysqli->error}." . PHP_EOL;
}else{
    // con $sentencia->affected_rows // nos retorans las filas afectadas
    echo "{$sentencia->affected_rows} Filas insertadas" . PHP_EOL ;
}





/**************************************************************/

//preparar
$sql2 = 'SELECT nombre, valor_final FROM producto';
// preparamos la senenccia con el query
$sentencia2 = $mysqli->prepare( $sql2 );
//vincular: // no es necesario ya que es un query

// ejecutamos para que pueda cargararse la preparacion
$sentencia2->execute();

// usar datos
// asignamos los valores de filtro en el bind_Result
$sentencia2->bind_result($nombre,$valor_final);


while( $fila = $sentencia2->fetch() ){
    // para este caso ya no accdemos desde fila como array, sino al nombre de la varaible o columna, ya que lo recorrera uno a uno 
    // de acuerdo a lo que pasamos al bind_result(columnas)
    echo $nombre . ' Costo = ' . $valor_final . PHP_EOL;
}

//liberar la memoria o cerrar la sentencia
$sentencia2->close();
// cerrar conexion
$mysqli->close();

?>