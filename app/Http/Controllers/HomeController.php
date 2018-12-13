<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nuevos = Game::paginate(6);
        $games = Game::paginate(18);
        return view('/home')->with(compact('games'))->with(compact('nuevos'));
    }
}
