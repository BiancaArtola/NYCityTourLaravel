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

//Route::get('/','main@index');
use App\Recorridos;
Route::get('/', function () {
	//$request = Request::create('/api/recorridos', 'GET');
	//$response = Route::dispatch($request);
	$response=Recorridos::all();
	$data = json_decode($response);
	return view('welcome', [ 'title' => 'Ciudades turísticas', 'recos' => $data]);
});