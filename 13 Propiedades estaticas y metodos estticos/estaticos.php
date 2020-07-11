<?php 

/*

Propiedades y metodos staticos:
N requieren de instancia se pueden invocar llamando a 
la clase y a la porpiedad o metodo

*/

class Padre {
    
    // defino una propiedad publica y le asgino un valor por defecto
    public static $nombre = 'Gustavo';
    
    
    public static function prueba(){
        echo "\n *** SOY UNA FUNCION ESTAICA, NO NECESITO INSTANCIA *** \n";
    }
    
}

?>