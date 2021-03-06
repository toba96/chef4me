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

Auth::routes();

Route::get('/customer', 'HomeController@index')->name('home');

Route::get('/chef', 'ChefController@index')->name('chef');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/order-questions', 'OrderController@showQuestion');

Auth::routes();

