<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
class View extends Controller
{
  public function show() {
      return view('profile');
  }
  public function inicio() {
      
      $nuevos = Game::paginate(6);
      $games = Game::paginate(18);
      return view('/home')->with(compact('games'))->with(compact('nuevos'));
  }
}
