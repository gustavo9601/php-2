<?php 

require_once 'hijo.php';

class Familia {
    
    // Hijo $persona
    // Indica que $persona debe ser una objeto o instancia de la clase Hijo
    public function miembro(Hijo $persona ){
        // accdemos al objeto $persona a la propiedad nombre
        echo "************************* \n ";
        echo $persona->nombre . PHP_EOL;
        echo $persona->apellido . PHP_EOL;
    }
    
}



// Instancia de la clase hijo
$persona = new Hijo('Gustavo el ingeniero');
// instancia de clase Familuia
$familia = new Familia();
// llamamos a la funcion publica de familia-> MIEMBRO y le pasamos el objeto o instancia de Hijo que requeire
$familia->miembro( $persona ); // la funcion hace echo del nombre del objeto


?>