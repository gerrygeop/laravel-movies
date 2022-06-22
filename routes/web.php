<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

/*movies*/
Route::get('/', 'MovieController@index')->name('movie.index');
Route::get('/movies/{movies}', 'MovieController@show')->name('movie.show');
/*end movies*/

/*actors*/
Route::get('/actors', 'ActorsController@index')->name('actors.index');
Route::get('/actors/page/{page?}', 'ActorsController@index');

Route::get('/actors/{id}', 'ActorsController@show')->name('actors.show');
/*end actors*/


/*tv*/
Route::get('/tv', 'TvController@index')->name('tv.index');
Route::get('/tv/{tv}', 'TvController@show')->name('tv.show');
/*end tv*/