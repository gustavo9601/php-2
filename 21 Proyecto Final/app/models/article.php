<?php

namespace App\Models;


/*Clase q utilizara el ORM*/
use Illuminate\Database\Eloquent\Model; //Importa la clase model del orm

class Article extends Model{

    // indicamos el nombre de la tabla de la BD
    protected $table = 'articles';

}


?>