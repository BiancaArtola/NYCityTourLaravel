<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class main extends Controller
{
    
	public function index()
	{
		$request = Request::create('/api/recorridos', 'GET');
		$response = Route::dispatch($request);
		return view('welcome', [ 'title' => 'Laravel Sal\'s Pizza', 'recos' => $response]);
	}

}
