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


Route::get('/deneme', "controllerDeneme@kontrolet");

Route::get('/form', "controllerDeneme@formgoster");
Route::post('/form', "controllerDeneme@formkontrol");

Route::get('/deneme/{blogUrl}', "controllerDeneme@blogUrlGoster");


Route::get('/blog', "controllerDeneme@bloggoster");
Route::post('/blog', "controllerDeneme@blogkaydet");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
