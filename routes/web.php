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

Route::get('/editeur', function () {
    return view('editeur.index');
});

Route::get('/homepage', function () {
    return view('ui-homepage-(main).index');
});

Route::get('/fiche-{id}', 'StorySampleController@index');

Route::get('/character-manager', 'CharacterManagerController@index');

Route::post('/character-manager', 'CharacterManagerController@index');