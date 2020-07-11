<?php 

class Persona {
    /*
    Funcion que recibe por parametro un objeto o instancia de la interface AnimalInterface
    */
    public function cuidar( AnimalInterface $animal )
    {
        // al recibir por parametro una instancia de la interfaz AnimallInterface, sabemos
        // que cada instancia tendra los siguientes metodos o funciones
        echo $animal->hablar() . PHP_EOL;
        echo $animal->comer( 'Carne con hueso' ) . PHP_EOL;
    }
    
}

?>