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
    //return "Home...";
});

//Creando nuevas rutas con id
/*Route::get('/usuarios/{id}', function ($id) {
    //return view('welcome');
    return "Mostrando detalle de usuario : {$id}";
})->where('id', '[0-9]+');
*/
Route::get('/usuarios/{id}', 'UserController@show')
    ->where('id', '[0-9]+');

//Creando nuevas rutas
/*Route::get('/usuarios/nuevo', function () {
    //return view('welcome');
    return "Crear Nuevo Usuario";
});*/
Route::get('/usuarios/nuevo', 'UserController@create');

//Creando nuevas rutas
/*Route::get('/usuarios', function () {
    //return view('welcome');
    return "Usuarios...";
});*/
Route::get('/usuarios', 'UserController@index');

// Ruta con el usuario nombre y nickname
/*Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    $name = ucfirst($name);    
    
    if($nickname){
      return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {      
      return "Bienvenido {$name}";
    }    
});*/
Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');


