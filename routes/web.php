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


// Création de personnage
Route::get('/personnage', function () {
    return view('personnage.index');
});

// landing page
Route::get('/landing', function () {
    return view('landing.index');
});

// mentions légales
Route::get('/mentions_legales', function () {
    return view('mentions_legales.index');
});


// Template
Route::get('/template', function () {
    return view('template.index');
});



Route::get('/personnage', 'PersonnageController@index');
Route::post('/personnage', 'PersonnageController@store');



// Create Story
Route::get('/edit', 'CreateStoryController@index');
Route::post('/edit', 'CreateStoryController@store');
// Create Map
Route::get('/map', function() {
    return view('create_map.index');
});