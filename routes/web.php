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

Route::get('/', function () {
    return view('home');
});

Route::get('/faq', function(){
  return view('faq');
});
Route::get('/login', function(){
  return view('login');
});
Route::get('/registro', function(){
  return view('registro');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
