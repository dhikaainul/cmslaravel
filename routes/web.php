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
//menu
Route::get('/home2', 'webcontroller@home2')->name('home2');
Route::get('/men', 'webcontroller@men')->name('men');
Route::get('/women', 'webcontroller@women')->name('women');
Route::get('/kids', 'webcontroller@kids')->name('kids');
Route::get('/carabayar', 'webcontroller@carabayar')->name('carabayar');
Route::get('/career', 'webcontroller@career')->name('career');
//komentar
Route::get('/komentarmen', 'webcontroller@komentarmen');
Route::get('/komentarwomen', 'webcontroller@komentarwomen');
Route::get('/komentarkids', 'webcontroller@komentarkids');
//menu manage
Route::get('/manage','ManageController@manage')->name('manage');
Route::get('/manage2','ManageController@manage2')->name('manage2');
Route::get('/manage3','ManageController@manage3')->name('manage3');
//tambah manage produk
Route::get('/addmanagemen','ManageController@addmanagemen');
Route::get('/addmanagewomen','ManageController@addmanagewomen');
Route::get('/addmanagekids','ManageController@addmanagekids');
//tambah komentar
Route::get('/addmanagecommen','webcontroller@addmanagecommen');
Route::get('/addmanagecomwomen','webcontroller@addmanagecomwomen');
Route::get('/addmanagecomkids','webcontroller@addmanagecomkids');
//create manage
Route::post('/createmen','ManageController@createmen'); 
Route::post('/createwomen','ManageController@createwomen');
Route::post('/createkids','ManageControllerr@createkids');
//create komentar
Route::post('/createcommen','webController@createcommen');
Route::post('/createcomwomen','webController@createcomwomen');
Route::post('/createcomkids','webController@createcomkids');
//edit,update,delete produk manage 
Route::get('/editmen/{id}','ManageController@editmen');
Route::post('/updatemen/{id}','ManageController@updatemen');  
Route::get('/deletemen/{id}','ManageController@deletemen'); 
Route::get('/editwomen/{id}','ManageController@editwomen');
Route::post('/updatewomen/{id}','ManageController@updatewomen');  
Route::get('/deletewomen/{id}','ManageController@deletewomen');
Route::get('/editkids/{id}','ManageControllerr@editkids');
Route::post('/updatekids/{id}','ManageController@updatekids');
Route::get('/deletekids/{id}','ManageController@deletekids');
//edit,update,delete komen
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
