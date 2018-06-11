<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Recorridos;

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

		  $this->validate(request(), [
		  	'tiempo'=> 'required|numeric',
		  	'nombre'=> 'required',
		  	'nombre_url'=> 'required|alpha_dash',
		  	'descripcion_breve'=> 'required|max:80|min:40',
		  	'descripcion' => 'required|min:100',
		  	'imagen' => 'required'
		  ], [
		  	'tiempo.numeric' => 'El campo "tiempo" debe ser un numero. Por favor ingrese nuevamente',
		  	'tiempo.required' => 'El campo "tiempo" es requerido.',
		  	'nombre.required' => 'El campo "nombre" es requerido.',
		  	'nombre_url.required' => 'El campo "url" es requerido.',
		  	'nombre_url.alpha_dash' => 'El campo "url" solo debe estar formado por letras, numeros, guiones o guiones bajos.',
		  	'descripcion.required' => 'El campo "descripcion" es requerido.',
		  	'descripcion.min' => 'El campo "descripcion" no debe tener menos de 80 caracteres.',
		  	'descripcion_breve.required' => 'El campo "descripcion breve" es requerido.',
		  	'descripcion_breve.max' => 'El campo "descripcion breve" no debe tener mas de 80 caracteres.',
		  	'descripcion_breve.min' => 'El campo "descripcion breve" no debe tener menos de 40 caracteres.',
		  	'imagen.required' => 'El campo "imagen" es requerido.'
			]);



		$recorrido= $recorridoId[0];		  
		$recorrido->nombre=$request->nombre;
		$recorrido->tiempo=$request->tiempo;
		$recorrido->categoria=$request->categoria;
		$recorrido->nombre_url=$request->nombre_url;
		$recorrido->tarifa=$request->tarifa;
		$recorrido->descripcion=$request->descripcion;
		$recorrido->descripcion_breve=$request->descripcion_breve;
		$recorrido->apto=$request->apto;
		$recorrido->imagen=$request->imagen;
		$recorrido->puntos=$recorrido->puntos+$request->puntosPI;

		//$recorrido->save();
		return redirect('/');
	}
}
