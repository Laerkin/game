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

Route::get('/editor', function () {
    return view('ui-editor-(main).index');
});

Route::get('/homepage', function () {
    return view('ui-homepage-(main).index');
});