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







Route::get('/template', function () {
    return view('template.index');
});


Route::get('/landing', function () {
    return view('landing.index');
});




/** ROUTES AUDIO/VIDEO  **/

Route::get('/audio', 'audioController@index');
Route::post('/audio', 'audioController@store');


Route::get('/video', 'videoController@index');
Route::post('/video', 'videoController@store');



/** EDITEUR FORMULAIRE BASIQUE */
Route::get('/editor', function () {
    return view('editeur.index');
});

Route::get('/homepage', function () {
    return view('editeur.index');
});


// Create Story
Route::get('/edit', 'CreateStoryController@index');
Route::post('/edit', 'CreateStoryController@store');


