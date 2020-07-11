<?php 

/*
Polimorfismo
Ejecutamos la misma funcion o metodo y 
esta responde de manera diferente.

No importa el tipo de animal que sea, mientra sea un animal que implemnte la interface AnimallInterfce

*/



// invoncando los archivos de clases
require_once 'Gato.php';
require_once 'Perro.php';
require_once 'Persona.php';

// creando isntancias de las clases
$miGato = new Gato();
$miPerro = new Perro();
$miPersona = new Persona();

// llamo a la funcion cuidar y le paso el objeto $miGato, que es instancia de Gato y este a su vez implementa la interfaz AnimalInterfaz
$miPersona->cuidar( $miGato );

?>