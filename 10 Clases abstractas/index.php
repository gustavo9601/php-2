<?php 

// invocamos el archivo
require_once 'Perro.php';

// creamos la instancia de la clase Perro
$miPerro = new Perro();

// mostramos en un echo lo que retorna la funcin saludar heredada de la clase Animal
echo $miPerro->saludar() . PHP_EOL;

// invocando al metodo abstracto obligatorio
$miPerro->hablar();
?>