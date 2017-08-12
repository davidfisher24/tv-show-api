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


/*
Welcome page route 
*/

Route::get('/', function () {
    return view('welcome')->with(array('error'=>null));
});


/*
Api call request.
Passes the search parameter to the Search Controller 
*/

Route::get('/search', 'SearchController@searchTvShows');
