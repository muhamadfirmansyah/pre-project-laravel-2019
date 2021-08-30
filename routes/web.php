
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

Auth::routes();

Route::get('/', function(){
	return view('home');
});

Route::get('/home', function(){
	return view('home');
})->name('home');

Route::get('/team', function (){
	return view('team');
})->name('team');


Route::get('/about', function (){
	return view('about');
})->name('about');

Route::get('/gallery', function ()
{
	return view('gallery');
})->name('gallery');