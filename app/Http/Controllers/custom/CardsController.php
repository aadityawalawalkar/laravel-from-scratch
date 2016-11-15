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
				// $card = Card::with('notes.user')->find(1);
				$card->load('notes.user'); // eager load card with notes & respective user

				// fetch all users
				$users = \App\User::all();
				$usersArr = array();
				foreach($users as $user) {
						$usersArr[$user->id] = $user->username;
				}

				return view('cards.show', [
					'card' => $card,
					'users' => $usersArr
				]);
		}

		public function add()
		{
				return view('cards.add');
		}

		public function store(Request $request, Card $card)
		{
				// dd($request->all());
				$card = new Card(['title' => $request->title]);
				// $card->title = $request->title;
				// dd($card->title);
				$card->save();	

				
				return \Redirect('/cards');
		}

		public function delete(Card $card)
		{
				// find & delete related notes
				if (count($card->notes)) {
					foreach ($card->notes as $note) {
						// find note
						$noteObj = \App\Note::find($note->id);
						// delete note
						$noteObj->delete();
					}
				}
				// delete card
				$card->delete();

				return back();
		}

		public function edit(Card $card)
		{
				return view('cards.add', compact('card'));
		}

		public function update(Request $request, Card $card)
		{
				$card->update($request->all());

				return redirect('cards');
		}

}
