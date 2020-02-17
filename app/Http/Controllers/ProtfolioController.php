<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProtfolioController extends Controller
{
    public function homePage()
    {
    	return view('home');
    }
}
