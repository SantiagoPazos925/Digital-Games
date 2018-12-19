<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class UserController extends Controller
{
    public function showEditarPerfil(){
      return view('editarPerfil');
    }

    public function editarPerfil(Request $request){

      $this->validate( $request, [
        'fullname' => 'required', 'string', 'min:5', 'max:50',
        'nick' => 'required', 'string', 'max:16', 'min:5',
        'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
        'password' => 'required', 'string', 'min:6', 'confirmed',
        'image' => 'image',
        'platform' => 'required', 'string',
        'country' => 'required', 'string',
        'province' => 'string',
        ],
      [
        'name.required' => 'Debe ingresar un titulo.',
        'name.string' => 'Valores ingresados no aceptados.',
        'name.unique' => 'Juego ya registrado.',
        'name.min' => 'El titulo debe tener mas de 2 caracteres.',
      ]);

      $user = Auth::user();

      if ($request->file('image')) {
        $folder = 'public/avatars';
        $path = $request->file('image')->storePubliclyAs( $folder, $request->input('nick') );
      }

      $user->update([
        'fullname' => $request->input('fullname'),
        'nick' => $request->input('nick'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
        'image' => $path??null,
        'platform' => $request->input('platform'),
        'country' => $request->input('country'),
        'province' => $request->input('province'),
          ]);



      return redirect('profile');
    }
}
