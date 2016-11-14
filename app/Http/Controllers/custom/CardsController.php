<?php

namespace App\Http\Controllers\custom;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Card;

class CardsController extends Controller
{
		public function index()
		{
	    	// $cards = \DB::table('cards')->get();
	    	// $cards = \App\Card::all();
	    	$cards = Card::all();

	    	return view('cards.index', compact('cards'));	
		}

		// first method of fetching data
		// public function show($id)
		// {
		// 	$card = Card::find($id);

		// 	return $card;
		// }

		// second method of fetching data
		// $card - variable name should be same as wildcard character in route
		// e.g. Route::get('cards/{card}', 'custom\CardsController@show');
		public function show(Card $card)
		{
				return view('cards.show', compact('card'));
		}
}
