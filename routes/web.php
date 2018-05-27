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

/*Formulaire gestion personnage*/

Route::get('/character-manager', 'CharacterManagerController@index');

Route::post('/character-manager', 'CharacterManagerController@storeCharacter');

Route::get('/landing', function () {
    return view('landing.index');
});
