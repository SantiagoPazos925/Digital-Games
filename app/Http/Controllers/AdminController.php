<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
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
      public function delete(Request $borro){
        $id = $borro->input('borrador');
        //$juego = \App\game::where('id',$id)->get();
        //dd($juego);
        DB::table('juegos')->delete($id);
      }
      public function update(Request $dato){
        $id = $dato->input('id');
        $nombre = $dato->input('nombre');
        $plataforma = $dato->input('plataforma');
        $genero = $dato->input('genero');
        $lanzamiento = $dato->input('lanzamiento');
        $precio = $dato->input('precio');
        $stock = $dato->input('stock');
        //$juego = \App\game::where('id',$id)->get();
        $datos = array('nombre'=>$nombre,
        'plataforma'=>$plataforma,
        'genero'=>$genero,
        'lanzamiento'=>$lanzamiento,
        'precio'=>$precio,
        'stock'=>$stock);
        DB::table('juegos')->where('id', $id)->update($datos);
        //DB::table('juegos')->select($juego)->update($datos
//);
      }
    }
