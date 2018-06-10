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
		  
		  $recorrido->nombre=$request->nombre;
		  $recorrido->tiempo=$request->tiempo;
		  $recorrido->categoria=$request->categoria;
		  $recorrido->nombre_url=$request->url;
		  $recorrido->tarifa=$request->tarifa;
		  $recorrido->descripcion=$request->descripcion;
		  $recorrido->descripcion_breve=$request->descripcion_breve;
		  $recorrido->apto=$request->apto;
		  $recorrido->imagen=$request->imagen;
		  
		  for ( $i=0; $i<count($request->puntosPI); $i++) {
		  	 
		  	$recorrido->puntos[$i] = $request->puntosPI[$i];
		  }

/*
		  $puntosPlace = request($puntosPI);
		  $puntos = array();
	      for($i=0 ; $i<count($puntosPlace) ; $i++) {
		     $puntos->place_id = $puntosPlace[$i];
		      $jugadores[$i] = $jugador;
		    }
	    $recorrido->puntos = $puntos;
		  //$recorrido->puntos[0]->place_id = $request->puntos;
*/
		  //$recorrido->save();
	//	  return redirect('/');
		  
	 }
}