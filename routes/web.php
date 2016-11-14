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

/*** Cards Routes - Start ***/
Route::get('cards', 'custom\CardsController@index');
Route::get('cards/{card}', 'custom\CardsController@show');
Route::post('cards/{card}/notes', 'custom\NotesController@store');
/*** Cards Routes - End ***/