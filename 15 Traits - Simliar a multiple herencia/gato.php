<?php 
// importamos el archivo
require_once 'Animal.php';
require_once 'TocableTrait.php';
require_once 'peligroTrait.php';


    // clase que extiende de la clase Animal
class Gato extends Animal {
   
    // usando el tocable trait, similiar auna clase que creamos
    // heredamos lo que tenemos en el trait
    use TocableTrait;
    
    // herenadmos del trait peligroTrait
    use peligroTrait;
}    



?>