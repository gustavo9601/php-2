<?php 
// inconcando al archivo o importando
require_once 'Animal.php';

// extiende de la clase animal
class Perro extends Animal {

    // definimos la funcion hablar, ya que es el metodo abstracto obligatorio por parte de la clase Animal
    public function hablar(){

        echo 'Soy un metodo abastracto, si no me pones en la clase hija, te saldra error' ;

    }

}

?>