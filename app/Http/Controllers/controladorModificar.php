<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class controladorModificar extends Controller
{
    public function modificar(Request $req){
    	$request = Request::create('/api/unRecorrido/{req->nombre_url}', 'get');
		$response = Route::dispatch($request);
		$response= $response->getOriginalContent();
		$data = json_decode($response);	
		return view('modificarRecorrido',['titulo'=>'Modificar un recorrido', 'recorrido' => $data]);
	}
}
