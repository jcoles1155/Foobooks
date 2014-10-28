<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('You have arrived!!!');
	
});

// Homepage
Route::get('/', function()
{

	return View::make(_master);

});

// list all books/search

Route::get('/list{query?}', function($query)
{

	return View::make(_master);

});

// displays form to add new books

Route::get('/add', function()
{

	

});

#processes form to add a new book

Route::post('/add', function()
{

	

});

// displays form to edit book

Route::get('/edit/{title}', function($title)
{

	

});

// Processes form to edit books

Route::post('/edit/', function()
{

	

});

// get the contents of books.json

//Route::post('/data', function()
{
	// Get the file
	$books = file::get(app_path().'/database/books.json');
	
	// Convert file to an array
	$books = json_decode($books, true);
	
	// Return the file
	return $books;

});
