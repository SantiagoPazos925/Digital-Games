<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscadorController extends Controller
{
    public function buscar($nombre){
      $juego = \App\game::where('nombre',$nombre)->get();
      return view('resultado')->with('nombre',$juego);
    }

}
