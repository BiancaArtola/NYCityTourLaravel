<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class main extends Controller
{
    
	public function index()
	{
		$request = Request::create('/api/recorridos', 'get');
		$response = Route::dispatch($request);
		$response= $response->getOriginalContent();
		$data = json_decode($response);
		return view('welcome', [ 'title' => 'Ciudades turísticas', 'recos' => $data]);
	}

}
