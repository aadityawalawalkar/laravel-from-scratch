<?php

namespace App\Http\Controllers\custom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function home()
    {
    	return view('custom.about');
    }
}
