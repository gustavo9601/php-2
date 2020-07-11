<?php 

require_once 'BebidaException.php';

try{
    echo 'Prueba';
    
    $numero = 1/0;
    
    echo $numero; // dispara una excepcion
    // podemos generar tantas como se necesaria catch

    // expection general

}catch (Exception $e){
    echo ' Se capturo un error';
}catch (BebidaException $e){
    // $e->getMessage()  // MUESTRA lo que devuelve e
    echo 'Excepcion = ' . $e->getMessage() .PHP_EOL ;
    echo 'Se genero una expection de Bebida';
    
}finally{
    echo '******Se ejecuto el finally simepre' . PHP_EOL;
}



echo ' FIN00 ' .PHP_EOL;

?>