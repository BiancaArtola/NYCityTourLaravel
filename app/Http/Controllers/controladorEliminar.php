<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class controladorEliminar extends Controller
{
    public function eliminar(Request $req){
    	$request = Request::create('/api/unRecorrido/{req->nombre_url}', 'get');
		$response = Route::dispatch($request);
		$response= $response->getOriginalContent();
		$data = json_decode($response);	
		var_dump($data);

		//hay q elimianr aca pero me da miedo hacerlo por si se elimina cualquiera

		return redirect('/');
    }
}
