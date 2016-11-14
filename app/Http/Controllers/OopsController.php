<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OopsController extends Controller
{
    public function features()
    {
  		$oops = ['Object', 'Class', 'Dynamic Binding', 'Message Passing', 'Inheritance', 'Data Hiding and Encapsulation', 'Polymorphism'];
  		$title = "Oops Features";
    	return view('custom.oops', [
    		'oops' => $oops,
    		'title' => $title
    		]
    	);
    }
}
