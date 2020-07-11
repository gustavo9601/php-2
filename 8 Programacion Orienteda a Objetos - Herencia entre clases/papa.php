
<!--

Cuando utilizamos var para definir las propiedads
es igual al public
var == public


modificadores de acceso
var - publico todas las clases
public - publico todas las clases
private - solo clase actual
protected - se puede acceder desde el hijo, pero como si fuera privada del hijo


NO HAY HERENCIA MULTPLE, SOLO EXISTE UN PADRE

-->

<?php 

// declaramos la clase Papa
class Papa {
    //Propiedades de la clase
    var $nombre = 'Gustavo';
    var $apellido = 'Marquez';
    private $secreto = 'Esta propiedad es privada';
    protected $cedula = 102456817;

    /*
    public $nombre = 'Gustavo';
    public $apellido = 'Marquez';
    */

    // funcion que retornara la variable privada
    public function retornaSecreto(){
        // retorna lo que pase por parametro o por defecto para cada instancia
        return $this->secreto; 
    }

    // solo se podra utilizar desde esta clase
    private function funcionPrivada(){
        echo ' Solo puedo ser accesible desde la clase padre ya que soy privada';
    }
    
    
    // funcion que publica que permiteria
    // retornar la cedula que es una propiedad privada
    public function getCedula(){
        return $this->cedula;
    }
    
    // funcion que modificara el valor por defecto de cedula para cada instancia
    public function setCedula( $numeroCedula ){
        $this->cedula = $numeroCedula;
    }
      



   
}


?>