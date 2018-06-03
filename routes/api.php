<?php

use App\Recorridos;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/recorridos', function () {
    return Recorridos::all();
});

Route::get('/unRecorrido', function () {
    return Recorridos::all();
    //aca hay q mandarle el recorrido correspondiente pero nose como mierda hcaerlo.
});