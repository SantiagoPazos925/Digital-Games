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
        'fullname' => 'required|regex:/^[a-zA-Z\s]*$/|min:5|string|max:50',
        'nick' => 'required|max:16|min:5|string',
        'email'=> 'email|unique:users|nullable',
        'image' => 'image',
        'platform' => 'required', 'string',
        'country' => 'required', 'string',
        'province' => 'string',
        ],
      [
        'fullname.required' => 'Debe ingresar un nombre',
        'fullname.regex' => 'El nombre no puede tener numeros o caracteres especiales',
        'fullname.min' => 'El nombre tiene que ser mayor a 5',
        'fullname.min' => 'El nombre tiene que ser menor a 50',
        
        'nick.required' => 'Debe ingresar un nick',
        'nick.max' => 'El nombre tiene que ser menor a 16',
        'nick.min' => 'El nombre tiene que ser mayor a 5',

        'email.required' => 'Debe ingresar un email',
        'email.unique' => 'Email ya registrado.',
        'email.max' => 'El email debe tener menos de 255 caracteres.',
        'email.email' => 'Debe ingresar un formato valido de email',

        'image.image' => 'La imagen tiene que ser (jpeg, png, bmp, gif, or svg)',
        
        'platform.required' => 'Debe seleccionar una plataforma',
        'country.required' => 'Debe seleccionar un pais',
        
      ]);

      $user = Auth::user();

      if ($request->file('image')) {
        $folder = 'public/avatars';
        $path = $request->file('image')->storePubliclyAs( $folder, $request->input('nick') );
      }

      $user->update([
        'fullname' => $request->input('fullname'),
        'nick' => $request->input('nick'),
        'email'=>$request->input('email'),
        'image' => $path??null,
        'platform' => $request->input('platform'),
        'country' => $request->input('country'),
        'province' => $request->input('province'),
          ]);



      return redirect('profile');
    }
}
