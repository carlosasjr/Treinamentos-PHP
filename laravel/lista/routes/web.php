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


/* Route::get('/', function () {
    echo "Dentro da router";
});
*/

/*Route::get('/', 'HomeController@home');
Route::get('/algumacoisa', 'HomeController@index');
Route::get('/algumacoisa/{id}', 'HomeController@teste');
*/

Route::get('/', 'HomeController@home');

Route::post('/', 'HomeController@add');

Route::get('/delete/{id}', 'HomeController@delete');
