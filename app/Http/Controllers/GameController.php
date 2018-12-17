<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('subirJuego');
    }

    public function indexBorrar()
    {
      return view('borrarJuego');
    }

    public function borrar(Request $request)
    {
      $juego = Game::where('id', $request->input('id'))->delete();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request)
         {
           $this->validate( $request, [
               'price' => 'required', 'numeral',
               'stock' => 'required', 'numeral',
               'name' => 'required', 'string', 'min:2', 'unique:games',
               'release_date' => 'date',
               'image' => 'required', 'mimes:jpeg,png,jpg,gif',
               'genre' => 'required',
               'platform' => 'required',
           ]);
           if ($request->file('image')) {
             $folder = 'public/juegos';
             $path = $request->file('image')->storePublicly( $folder );
             
           }
            $product = Game::create([
               'name' => $request->input('name'),
               'price' => $request->input('price'),
               'release_date' => $request->input('release_date'),
               'image' => $path??null,
               'stock' => $request->input('stock'),
               'genre' => $request->input('genre'),
               'platform' => $request->input('platform'),
           ]);

           return redirect('/');

         }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);
        return view('juego')
        ->with(compact('id'))
        ->with(compact('game'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
