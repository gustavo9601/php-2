<?php

// Indicando la posicion actual con el namespace
namespace App\Controllers;



/*
Esta clase pasara los datos a las vistas para que pasen correctamente


*/
class ArticleController
{
    /*funcion index mostrara el listado de articulos*/
    public function index(){
        $articles = Article::all();

    

    }
}

?>