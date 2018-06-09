<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class controladorEliminar extends Controller
{
    public function eliminar(Request $req){
    	var_dump("hola");
    	$request = Request::create('/api/unRecorrido/{req->_id}', 'get');
		$response = Route::dispatch($request);
		
		$response -> delete();

		return redirect('/');
    }
}
