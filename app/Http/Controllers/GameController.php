<?php

namespace App\Http\Controllers;
use App\User;
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



    public function borrar($id)
    {

        $game = Game::find($id)->delete();
      return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request)
         {

                $this->validate( $request, [
                    'name' => 'required|unique:games|string|min:2',
                    'price' => 'required|numeric',
                    'stock' => 'required|numeric',
                    'release_date' => 'required|date',
                    'image' => 'required|mimes:jpeg,png,jpg,gif',
                    'genre' => 'required',
                    'platform' => 'required',
                ],
              [
                'name.required' => 'Debe ingresar un titulo.',
                'name.string' => 'Valores ingresados no aceptados.',
                'name.unique' => 'Juego ya registrado.',
                'name.min' => 'El titulo debe tener mas de 2 caracteres.',

                'price.required' => 'Debe ingresar un precio.',
                'price.numeric' => 'Tiene que ingresar un numero',

                'stock.required' => 'Debe ingresar un precio.',
                'stock.numeric' => 'Tiene que ingresar un numero',

                'release_date.required' => 'Debe ingresar una fecha',
                'release_date.date' => 'Debe ingresar un formato fecha',

                'image.required' => 'Debe subir una portada',
                'image.mimes' => 'Formato de imagen inválida',

                'genre.required' => 'Debe seleccionar un genero', 
                'platform.required' => 'Debe seleccionar una plataforma',  
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
            if(isset($game)){
            return view('juego')->with(compact('game'));
        }else{
            return redirect('/');
        }

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
    public function showUpdate(Request $request, $id)
    {

        $game = Game::find($id);
        /*->update(['name'=>$request->input('name')]);*/
        return view('editarJuego')->with(compact('game'));

    }
    public function update(Request $request,$id){


        $this->validate( $request, [
            'price' => 'required', 'numeric',
            'stock' => 'required', 'numeric',
            'name' => 'unique:games', 'string', 'min:2',
            'release_date' => 'required',
            'image' => 'required', 'mimes:jpeg,png,jpg,gif',
            'genre' => 'required',
            'platform' => 'required',
          ],
        [
          'name.required' => 'Debe ingresar un titulo.',
          'name.string' => 'Valores ingresados no aceptados.',
          'name.unique' => 'Juego ya registrado.',
          'name.min' => 'El titulo debe tener mas de 2 caracteres.',
        ]);

        if ($request->file('image')) {
          $folder = 'public/juegos';
          $path = $request->file('image')->storePublicly( $folder );

        }

        $game = Game::find($id)->update([
            'name'=>$request->input('name'),
            'platform'=>$request->input('platform'),
            'genre'=>$request->input('genre'),
            'release_date' => $request->input('release_date'),
            'price'=>$request->input('price'),
            'image' => $path??null,
            'stock'=>$request->input('stock'),
            ]);
        return redirect($id);


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
