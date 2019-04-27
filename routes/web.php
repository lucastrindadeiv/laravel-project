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

Route::get('/', 'HomeController@home');

Route::post('/', 'HomeController@add');

Route::get('/delete/{id}', 'HomeController@del');



// Route::get('/algumacoisa', 'HomeController@teste');

// Route::get('/algumacoisa/{id}', 'HomeController@teste');

// id = qualquer coisa que por na url vai continuar mostrando o alguma coisa