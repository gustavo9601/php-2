<?php 

/*

Clases abstractas
Contrato parcial de la clase con metodos anstractos

- Toda clase que herede de una clase abstracta, debe estar obligado a heredar un metodo abstracto que si queiere no retirna o devuelve nada

*/

abstract class Animal{
    
    // funcion abstracta que se debe llamar desde los hijos que hereden la clase Animal
    abstract public function hablar();
    
    
    
    public function saludar()
    {
        return 'Hola';    
    }
    
}


?>