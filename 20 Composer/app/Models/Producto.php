<?php
// Usamo un espacio de Nombre, para
// indicar en q carpeta estamos actualmente -> PSR4 
namespace App\Models;


use Illuminate\Database\Eloquent\Model;


// Clase que extiende de Model DEL ORM
class Producto extends Model {
    // protected es propio del ORM
    // Drinimos una variable que alamcenrara la tabla de la BD para el ORM
    
    protected $table = 'producto';
}


/*

Clase donde cada uno de los
atributos de la TABLA, es de esta clase

*/