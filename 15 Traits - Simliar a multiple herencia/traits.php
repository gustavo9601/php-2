<?php 

/*

sE PUEDEN USAR TRAITS DENTRO DE OTROS TRAITS


*/
require_once 'gato.php';

$gato = new Gato;

// objeto gato , hereda la funcion tocar y la mostramos
echo $gato->tocar() . ' Herendo del trait TocableTrait ' .PHP_EOL;

// objeto gato, hereda la funcion peligro al instanciarse de la clase gato
echo $gato->peligro() . ' Heredo del trait PeligroTrait ' .PHP_EOL ;
?>