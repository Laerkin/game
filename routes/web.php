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
use Illuminate\Http\Request;


// Routes login
Route::auth();

Route::get('/home', 'homeController@index');
Route::post('/home', 'homeController@index');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', function() {
    Auth::logout();
    return view('welcome');
});


// Routes editeur


Route::get('edit', 'editeurController@index');
Route::post('/edit', 'editeurController@store');


Route::post('/saveloc', 'editeurController@store');

// Route Effet Particles
Route::get('/particles', function() {
    return view('particles.index');
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











// rich text routes
//summernote form
Route::get('/richtext', function () {
    return view('richtext.index');
});


//summernote store route
Route::post('/richtext','richtextController@store')->name('richtextPersist');

//summernote display route
Route::get('/richtext_display','richtextController@show')->name('richtextDispay');

/*controller ajout personnage*/

Route::post('/edit', 'CharacterManagerController@storeCharacter');




Route::get('/home', 'HomeController@index')->name('home');


/**  LECTEUR **/

Route::get('/lecteur', function () {
    return view('lecteur.index');
});
// fin de l'histoire

Route::get('/endOfStory', function () {
    return view('endOfStory.index');
});
    