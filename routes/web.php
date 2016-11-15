<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello_world');
});

Route::get('oops', function () {
	$oops = ['Object', 'Class', 'Dynamic Binding', 'Message Passing', 'Inheritance', 'Data Hiding and Encapsulation', 'Polymorphism'];

	// return view('custom.oops', ['oops' => $oops]);
	return view('oops', compact('oops'));
	// return view('custom.oops')->with('oops' => $oops);
	// return view('custom.oops')->withOops($oops);
});

Route::get('oops-features', function () {
	$oops = ['Object', 'Class', 'Dynamic Binding', 'Message Passing', 'Inheritance', 'Data Hiding and Encapsulation', 'Polymorphism'];

	$title = "Oops Features";
	
	return view('custom.oops', [
		'oops' => $oops,
		'title' => $title
	]);
});

Route::get('oops', 'OopsController@features');

Route::get('about', 'custom\AboutController@home');

/************************ Cards Routes - Start **************************/
// show all cards
Route::get('cards', 'custom\CardsController@index');

// show specific card
Route::get('cards/{card}', 'custom\CardsController@show');

// add card
Route::get('card/add', 'custom\CardsController@add');

// save added card
Route::post('card/store', 'custom\CardsController@store');

// update added card form
Route::get('card/{card}/edit', 'custom\CardsController@edit');

// update added card
Route::patch('card/{card}', 'custom\CardsController@update');

// delete added card
Route::get('card/{card}/delete', 'custom\CardsController@delete');
/************************ Cards Routes - End **************************/


/************************ Notes Routes - Start **************************/
// Add note form
Route::post('cards/{card}/notes', 'custom\NotesController@store');

// Edit note
Route::get('notes/{note}/edit', 'custom\NotesController@edit');

// Update note
Route::patch('notes/{note}', 'custom\NotesController@update');

Route::get('notes/{note}/delete', 'custom\NotesController@delete');

/************************ Notes Routes - End **************************/