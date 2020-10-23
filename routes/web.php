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
Route::get('/men', 'webcontroller@men')->name('men');
Route::get('/women', 'webcontroller@women')->name('women');
Route::get('/kids', 'webcontroller@kids')->name('kids');
Route::get('/carabayar', 'webcontroller@carabayar');
Route::get('/career', 'webcontroller@career');
Route::get('/komentarmen', 'webcontroller@komentarmen');
Route::get('/komentarwomen', 'webcontroller@komentarwomen');
Route::get('/komentarkids', 'webcontroller@komentarkids');
Route::get('/manage','webcontroller@manage')->name('manage');
Route::get('/manage2','webcontroller@manage2')->name('manage2');
Route::get('/manage3','webcontroller@manage3')->name('manage3');
Route::get('/addmanagemen','webcontroller@addmanagemen');
Route::get('/addmanagewomen','webcontroller@addmanagewomen');
Route::get('/addmanagekids','webcontroller@addmanagekids');
Route::get('/addmanagecommen','webcontroller@addmanagecommen');
Route::get('/addmanagecomwomen','webcontroller@addmanagecomwomen');
Route::get('/addmanagecomkids','webcontroller@addmanagecomkids');
Route::post('/createmen','webController@createmen'); 
Route::post('/createwomen','webController@createwomen');
Route::post('/createkids','webController@createkids');
Route::post('/createcommen','webController@createcommen');
Route::post('/createcomwomen','webController@createcomwomen');
Route::post('/createcomkids','webController@createcomkids');
Route::get('/editmen/{id}','webController@editmen');
Route::post('/updatemen/{id}','webController@updatemen');  
Route::get('/deletemen/{id}','webController@deletemen'); 
Route::get('/editwomen/{id}','webController@editwomen');
Route::post('/updatewomen/{id}','webController@updatewomen');  
Route::get('/deletewomen/{id}','webController@deletewomen');
Route::get('/editkids/{id}','webController@editkids');
Route::post('/updatekids/{id}','webController@updatekids');
Route::get('/deletekids/{id}','webController@deletekids');
Route::get('/editcommen/{id}','webController@editcommen');
Route::post('/updatecommen/{id}','webController@updatecommen');
Route::get('/deletecommen/{id}','webController@deletecommen');
Route::get('/editcomwomen/{id}','webController@editcomwomen');
Route::post('/updatecomwomen/{id}','webController@updatecomwomen');
Route::get('/deletecomwomen/{id}','webController@deletecomwomen');
Route::get('/editcomkids/{id}','webController@editcomkids');
Route::post('/updatecomkids/{id}','webController@updatecomkids');
Route::get('/deletecomkids/{id}','webController@deletecomkids');


Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
