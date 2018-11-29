<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class InsertController extends Controller
{
    public function insert(Request $dato){
      $nombre = $dato->input('nombre');
      $plataforma = $dato->input('plataforma');
      $genero = $dato->input('genero');
      $lanzamiento = $dato->input('lanzamiento');
      $precio = $dato->input('precio');
      $stock = $dato->input('stock');

      $datos = array('nombre'=>$nombre,
      'plataforma'=>$plataforma,
      'genero'=>$genero,
      'lanzamiento'=>$lanzamiento,
      'precio'=>$precio,
      'stock'=>$stock);
      DB::table('juegos')->insert($datos);
    }
}
