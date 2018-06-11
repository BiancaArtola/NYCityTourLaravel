<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recorridos;

class controladorAgregar extends Controller{

    public function agregarView(){
   		return view('nuevoReco',['titulo'=>'Crear nuevo recorrido']);
	 }

	 public function agregar(Request $request){
		  $recorrido= new Recorridos();

		  $this->validate(request(), [
		  	'tiempo'=> 'required|numeric',
		  	'nombre'=> 'required',
		  	'url'=> 'required|alpha_dash',
		  	'descripcion_breve'=> 'required|max:80|min:40',
		  	'descripcion' => 'required|min:100',
		  	'imagen' => 'required'
		  ], [
		  	'tiempo.numeric' => 'El campo "tiempo" debe ser un numero. Por favor ingrese nuevamente',
		  	'tiempo.required' => 'El campo "tiempo" es requerido.',
		  	'nombre.required' => 'El campo "nombre" es requerido.',
		  	'url.required' => 'El campo "url" es requerido.',
		  	'url.alpha_dash' => 'El campo "url" solo debe estar formado por letras, numeros, guiones o guiones bajos.',
		  	'descripcion.required' => 'El campo "descripcion" es requerido.',
		  	'descripcion.min' => 'El campo "descripcion" no debe tener menos de 80 caracteres.',
		  	'descripcion_breve.required' => 'El campo "descripcion breve" es requerido.',
		  	'descripcion_breve.max' => 'El campo "descripcion breve" no debe tener mas de 80 caracteres.',
		  	'descripcion_breve.min' => 'El campo "descripcion breve" no debe tener menos de 40 caracteres.',
		  	'imagen.required' => 'El campo "imagen" es requerido.'
			]);

		  $recorrido->nombre=$request->nombre;
		  $recorrido->tiempo=$request->tiempo;
		  $recorrido->categoria=$request->categoria;
		  $recorrido->nombre_url=$request->url;
		  $recorrido->tarifa=$request->tarifa;
		  $recorrido->descripcion=$request->descripcion;
		  $recorrido->descripcion_breve=$request->descripcion_breve;
		  $recorrido->apto=$request->apto;
		  $recorrido->imagen=$request->imagen;
		  $recorrido->puntos = $request->puntosPI;

		  $recorrido->save();
		  return redirect('/');
		  
	 }
}