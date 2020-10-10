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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/home2', 'webcontroller@home2');
Route::get('/men', 'webcontroller@men');
Route::get('/women', 'webcontroller@women');
Route::get('/kids', 'webcontroller@kids');
Route::get('/carabayar', 'webcontroller@carabayar');
Route::get('/career', 'webcontroller@career');

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
