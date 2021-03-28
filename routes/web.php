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
    return view('public.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/books', 'PublicController@index')->name('public-index');
//->name('public-index')nome della rotta di Public index che poi viene usata nel cotrolle del return
//è un rotta publica

//copiato dalla slide(E MIDIFICATO!!)
//rotta privata
Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function () {
    Route::resource('/books', 'BookController');//quando facciamo le crude usiamo resurce!
});

