<?php 
/*
Las interfaces son muy similares a las clases abstractas expecto que no teinen logica

Son unicamente un contrato que deben umplir las 
clases que hereden de ellas
y estas no tiene { //codigo }

*/

interface AnimalInterface {
    
    public function comer( $comida );
    
    public function hablar();
}


?>