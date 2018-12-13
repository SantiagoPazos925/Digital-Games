<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', 'View@inicio');

Route::get('/profile', 'View@show')->middleware('auth');

Route::get('/faq', function(){
  return view('faq');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/subirJuego', 'GameController@index')->name('subirJuego');
Route::post('/subirJuego', 'GameController@create')->name('subirJuegoPOST');

Route::get('/borrarJuego', 'GameController@indexBorrar')->name('borrarJuego');
Route::post('/borrarJuego', 'GameController@borrar')->name('borrarJuegoPOST');

Route::get('/buscador',function(){
  return view('buscador');
});

Route::get('/buscador/{nombre}','BuscadorController@buscar');
Route::get('/agregarjuego',function(){
  return view('insertForm');
});


Route::post('/insert','AdminController@insert');
Route::post('/delete','AdminController@delete');
Route::post('/update','AdminController@update');
Route::post('/insert','InsertController@insert');
