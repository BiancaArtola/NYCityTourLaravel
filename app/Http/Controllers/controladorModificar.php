<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class controladorModificar extends Controller
{
    public function modificarView(Request $req){
    	$request = Request::create('/api/unRecorrido/{req->nombre_url}', 'get');
		$response = Route::dispatch($request);
		$response= $response->getOriginalContent();
		$data = json_decode($response);	
		return view('modificarRecorrido',['titulo'=>'Modificar un recorrido', 'recorrido' => $data]);
	}


	public function modificar(Request $request){
		$recorridoId = Recorridos::where('_id', $request -> idRecorrido)->get();
		$recorrido= $recorridoId[0];
		  
		$recorrido->nombre=$request->nombre;
		$recorrido->tiempo=$request->tiempo;
		$recorrido->categoria=$request->categoria;
		$recorrido->nombre_url=$request->url;
		$recorrido->tarifa=$request->tarifa;
		$recorrido->descripcion=$request->descripcion;
		$recorrido->descripcion_breve=$request->descripcion_breve;
		$recorrido->apto=$request->apto;
		$recorrido->imagen=$request->imagen;
		// $recorrido->puntos[0]->place_id=$request->puntos;

		$recorrido->save();
		return redirect('/');
	}
}
