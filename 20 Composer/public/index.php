<?php


// importnado el atoload
// __DIR__   // carpeta actual
require_once __DIR__ . '../vendor/autoload.php';
use App\Models\Producto;

//Una varaible que hace instancia a la clase Producto
//::all() devuelve todos los registros ya que es estatica y no necesita instacia
$productos = Producto::all();


var_dump( $productos );


/***********************************/
/*


require_once '../config/app.php';

use App\Models\Producto;

$productos = Producto::all();
// SELECT * FROM productos;

//$productos = App\Models\Producto::where('nombre', 'LIKE', '%s')->get();

include_once APP_PATH . 'views/productos/index.view.php';
*/
