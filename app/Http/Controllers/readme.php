<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class readme extends Controller
{
    public function readmeRender()
    {
    	return view('readme');
    }
}
