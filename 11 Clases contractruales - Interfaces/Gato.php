<?php 
// invocamos al archivo de clase interface
require_once 'Animalinterface.php';
// creamos la clase qu eimperte la clase interface
class Gato implements Animalinterface
{
    
    /*
    
    CREAMOS LAS FUNCIONES OBLIGATORIAS
    que estan definidas en la interface AnimalInterface
    y si queremos le ponemos mas codigo para q retornen algo
    */
    public function comer($comida){
        return 'Comiendo ' . $comida . PHP_EOL;
    }
    
    
    public function hablar(){
        return 'Hablando';
    }



}

?>