<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorAgregar extends Controller
{
    public function agregar(){
		 return view('nuevoReco',['titulo'=>'Crear nuevo recorrido']);
	}
}
