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
    return view('welcome');
});

Route::get('/quienes', function () {
    return view('quienes');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/distribuidores', function () {
    return view('distribuidores');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//control de acceso



Route::get('correcto/{email}',  'AccesoController@correcto')->name('correcto');

Route::get('incorrecto/{email}',  'AccesoController@incorrecto')->name('incorrecto');
Route::group(['middleware' => 'auth'], function () {

Route::get('usuarios/accesos',  'AccesoController@accesos')->name('accesos');
    
Route::get('acceso-correcto',  'AccesoController@acceso_correcto')->name('acceso-correcto');

Route::get('acceso-incorrecto',  'AccesoController@acceso_incorrecto')->name('acceso-incorrecto');

//administracion de usuarios

Route::get('usuarios/usuarios',  'UsuarioController@index')->name('usuarios');

Route::get('usuarios/create',  'UsuarioController@create')->name('nuevo_usuario');

Route::get('usuarios/create',  'UsuarioController@create')->name('nuevo_usuario');

Route::get('usuarios/list',  'UsuarioController@lista')->name('list');

Route::post('storeuser', 'UsuarioController@store')->name('storeuser');

Route::resource('usuarios','UsuarioController');

});