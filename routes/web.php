<?php

use Illuminate\Support\Facades\Route;

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
    return view('inicio');
});
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('storage/avatar/{file}', function ($file) {

	$rutaDeArchivo = storage_path() . '/app/avatar/' . $file;
	//return $rutaDeArchivo;
	return response()->file($rutaDeArchivo);
});

// Route::get('/home', 'HomeController@index')->name('home');
