<?php 

// invocando al archivo
require_once 'papa.php';


/*
    extend de Papa
    
    -> tendremos todas las propiedaes Y FUNCIONES PUBLICAS DEL PADRE de la clase Papa
*/
class Hijo extends Papa {
    // creamos un constructor q recibe un parametro,para que sea lo primero q se ejecute 
    // cuando se instancie esta clase
    
    public function __construct ( $nombre ){
        // le asignamos el var nombre que se herada de la clase papa
        // le asignamos el valor por cada instancia de clase hijo 
        $this->nombre = $nombre;
    }
    
    
    public function saludar(){
        echo 'Hola';
        
    }
    
    
    
}


?>