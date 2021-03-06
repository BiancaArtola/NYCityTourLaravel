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

//Get pagina principal
Route::get('/', 'controladorRecorridos@index') -> middleware('auth');

//Get pagina agregar recorrido
Route::get('/nuevoRecorrido','controladorAgregar@agregarView') -> middleware('auth');

//Get pagina modificar
Route::get('/modificarRecorrido/{nombre_url}','controladorModificar@modificarView') -> middleware('auth');

//Get eliminar
Route::get('/eliminar/{_id}','controladorEliminar@eliminar') -> middleware('auth');

//Post pagina agregar recorrido
Route::post('agregar', 'controladorAgregar@agregar') -> middleware('auth');

//Post pagina modificar recorrido
Route::post('modificar','controladorModificar@modificar') -> middleware('auth');

//Get pagina modificar
Route::post('eliminar','controladorEliminar@eliminar') -> middleware('auth');

Route::get('/readme','readme@readmeRender');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
