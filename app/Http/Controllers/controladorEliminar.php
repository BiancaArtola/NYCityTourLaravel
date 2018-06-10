<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Recorridos;

class controladorEliminar extends Controller
{
    public function eliminar(Request $req){
    	var_dump($req->_id);
    	$reco=Recorridos::where('nombre_url', $req ->_id)->get();
    	$reco[0]->delete();

		return redirect('/');
    }
}
