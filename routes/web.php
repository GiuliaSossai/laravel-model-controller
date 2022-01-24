<?php

use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', 'PageController@index')->name('home');

Route::get('/chi_siamo', function(){
    return view('about');
})->name('about');

Route::get('/film', 'MoviesController@getMovies')->name('movies');

Route::get('/contatti', 'ContactsController@getContacts')->name('contacts');