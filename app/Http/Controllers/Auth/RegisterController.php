<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fullname' => 'required|regex:/^[a-zA-Z\s]*$/|string|min:5|max:50',
            'nick' => ['required', 'string', 'max:16', 'min:5'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'image' => ['mimes:jpeg,bmp,png,jpg,gif'],
            'platform' => ['required', 'string'],
            'country' => ['required', 'string'],
            'province' => ['string'],
        ],[
            'fullname.required' => 'Debe ingresar un titulo.',
            'fullname.regex' => 'Solo debe incluir letras.',
            'fullname.min' => 'El nombre debe tener al menos 5 caracteres.',
            'fullname.max' => 'El nombre debe tener como maximo 50 caracteres.',
            'nick.required' => 'Debe ingresar un nick.',
            'nick.min' => 'El nick debe tener al menos 5 caracteres.',
            'nick.max' => 'El nick debe tener como maximo 16 caracteres.',
            'email.required' => 'Debe ingresar un email.',
            'email.email' => 'Tiene que ingresar un email valido',
            'email.unique' => 'El email ingresado ya esta en uso.',
            'password.required' => 'Debe ingresar una contraseña.',
            'password.min' => 'Debe ingresar al menos 6 caracteres.',
            'password.confirmed' => 'Las contraseñas deben coincidir.',
            'image.mimes' => 'Formato de imagen inválida',
            'platform.required' => 'Debe seleccionar una plataforma',
            'country.required' => 'Debe seleccionar un pais',
              
          ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      if (isset($data['image'])) {
        $folder = 'public/avatars';
        $path = $data['image']->storePubliclyAs( $folder, $data['email'] );
      }
      return User::create([
          'fullname' => $data['fullname'],
          'nick' => $data['nick'],
          'country' => $data['country'],
          'province' => $data['province']??null,
          'email' => $data['email'],
          'image' => $path??'/proyecto/Proyecto/TpFinal/images/profile.png',
          'password' => Hash::make($data['password']),
          'platform' => $data['platform'],
      ]);
    }
}
