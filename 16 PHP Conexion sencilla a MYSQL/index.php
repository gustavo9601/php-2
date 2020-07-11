<?php 

/*Conexion con base de datos MYSQL*/

/*
PASOS

1. Conectar a la Bd
2. Verificar la conexion
3. Ejecutar la sentencia SQL, QUERY
4. PHP para imprimir datos, filas
5. Liberar la memoria de reusltados.
6. Cerrar la conexion

*/


// 1. Conexion
/*
- definidmos una variavel de tipo
mysqli_connect() -> le pasamos los parametros
    - servidor
    - usuario
    - contraseña
    - nombre bd

*/
$conexion_mysqli = mysqli_connect( '127.0.0.1','root','','inventario' );


// 2. verificamos conexion

/*
Funcion propiea de mysql, que permite validar si ocurrrio algun error en la conexion, pasandole por parametro la varaible que creamos
mysqli_connect_errno( $conexion_mysqli )
*/
if ( mysqli_connect_errno( $conexion_mysqli )){
    echo 'Fallo la conexion con MySql' . mysqli_connect_error(); // mostrarmo el error generado
} else{
    echo 'Conexion exitosa' .PHP_EOL;
}



// 3. Ejecutar la sentencia sql

/*

Creamos el query, especificando las columnas a recibir
*/
$resultado = mysqli_query( $conexion_mysqli, "SELECT nombre, valor_final FROM producto" );

// 4. imrpimier las filas
/*
con un ciclo recorremos uno a uno los registros ibtenidos

mysqli_fetch_assoc( $varaible que contiene el query );

Se ira guardando en la varaible $fila
*/
while( $fila = mysqli_fetch_assoc( $resultado ) ){
    // $fila, se comporta como array por cada registro, por ende accedemos [nombreColumna]
    echo $fila['nombre'] . ' Cuesta = '. $fila['valor_final'] . PHP_EOL;
    
}


// 5. Liberar memoria
// liberamos la memoria, pasando por parametro el query varaible
mysqli_free_result( $resultado );





// 6 Cerrar la conexion
/*
Cerrarmos la conexion con la funcion
mysqli_close( variable que contiene la conexion );

*/
mysqli_close( $conexion_mysqli );

?>