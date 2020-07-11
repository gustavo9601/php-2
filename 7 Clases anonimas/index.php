<?php 
// nombre de clase
class Fabrica{
    //creanis una funcion publica, que recibe 2 parametos
    public function fabricarMesa( $p_color , $p_patas )
    {
        // la funcion retornara una clase anonima que recibira los mismo 2 parametros de la funcion
        return new Class( $p_color , $p_patas ){
            // propiedades privadas propias de la clase anonima
            private $color;
            private $patas;
            //constructor de la clase, q recibe los 2 parametros de la funcion y clase
            public function __construct($p_color , $p_patas){
                //asigno los valores recibidos a las PROPIEDADES de la clase anonima para cada instancia
                $this->color = $p_color;
                $this->patas = $p_patas;
            }
            // funcion publica que retornara lo que contenga la propiedad color
            public function getColor(){
                return $this->color;
            }
            // funcion publica que retornara lo que contenga la porpiedad patas
            public function getPatas(){
                return $this->patas;
            }
            
            
            
        }; // ; ya q es anonima la clase    
    }
    
}

?>