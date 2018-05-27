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
Route::get('/landing', function() {
    Auth::logout();
    return view('landing');
});

Route::get('/mentions_legales', function() {
    return view('mentions_legales.index');
});

Route::get('/cgu', function() {
    return view('cgu.index');
});


// Routes editeur

Route::get('edit', 'editeurController@index');
Route::post('edit', 'editeurController@index');






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
Route::get('/edit', function () {
    return view('editeur.index');
});

/** EDITEUR FORMULAIRE BASIQUE */
Route::get('/editor2', function () {
    return view('editeur.2index');
});




// Create Story
Route::get('/editor', 'CreateStoryController@index');
Route::post('/editor', 'CreateStoryController@store');


// rich text routes
//summernote form
Route::get('/richtext', function () {
    return view('richtext.index');
});


//summernote store route
Route::post('/richtext','richtextController@store')->name('richtextPersist');

//summernote display route
Route::get('/richtext_display','richtextController@show')->name('richtextDispay');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





// Mentions légales
Route::get('/mentions', function () {
    return view('mentions.index');
});

