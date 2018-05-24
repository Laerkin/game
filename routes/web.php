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


// Create Story
Route::get('/edit', 'CreateStoryController@index');
Route::post('/edit', 'CreateStoryController@store');

// Create Map
Route::get('/map', 'MapController@index');
Route::post('/map', 'MapController@store');



