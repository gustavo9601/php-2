<?php  


// decalaracion de clase
// es un plano, que permite crear varias instacion (objetos),
// que permitiran utilizar esta estructura
class Producto {

    // decalaracion de propiedades
    var $nombre;
    var $talla;
    var $precio = 100 ; // le asgino un valor por defecto, q sera cambiado desde las instancias

    // constructor de clase
    // se ejcuta en cada instancia automaticamente
    function __construct( $nombre , $talla , $precio )
    {
        // asigno el valor que se pase por parametro a cada una de las instancias de las propiedades
        $this->nombre = $nombre;
        $this->talla = $talla;
        $this->precio = $precio;
        
        // echo "***Se creo un contructor *** \n";    
        
    }
    

    function resumen(){
        // $this, hace referencua a la instancia actual, 
        echo '**********************' . PHP_EOL;
        echo '**** FUNCION DE CLASE ****' . PHP_EOL;
        echo $this->nombre . PHP_EOL;
        echo $this->talla . PHP_EOL;
        echo $this->precio . PHP_EOL;
    }

}


/**/

?>