<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nuevoRecorridoController extends Controller
{
	public function agregar(){
		 return view('nuevoReco',['titulo'=>'Crear nuevo recorrido']);
	}
   
}
