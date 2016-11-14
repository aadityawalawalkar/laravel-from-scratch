<?php

namespace App\Http\Controllers\custom;

use Illuminate\Http\Request;
use App\Note;
use App\Card;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
    		// return $request->all();
				// return \Request::all();
    		// return request()->all();
    	
    		/*** Adding note 1st Method - Start ***/
    		// $note = new Note;

    		// $note->body = $request->body;

    		// $card->notes()->save($note);
    		/*** Adding note 1st Method - End ***/

    		/*** Adding note 2nd Method - Start ***/
    		// $card->notes()->save(
    		// 	new Note(['body' => $request->body])
    		// );
    		/*** Adding note 2nd Method - Start ***/

    		/*** Adding note 3rd Method - Start ***/
    	// 	$card->notes()->create([
    	// 		'body' => $request->body
  			// ]);
    		/*** Adding note 3rd Method - End ***/

    		/*** Adding note 4th Method - Start ***/
    		// $card->notes()->create($request->all());
    		/*** Adding note 4th Method - End ***/

    		/*** Adding note 5th Method - Start ***/
    		$card->addNote(
    			new Note($request->all())
    		);
    		/*** Adding note 5th Method - End ***/

    		return back();
    }
}
