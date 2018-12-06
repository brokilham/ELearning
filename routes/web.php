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

/*(Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

/*Route::group(['namespace' => 'Auth'], function () {
   // Route::get('login', 'LoginController@showLoginForm')->name('login');
    //Route::post('login', 'LoginController@login');
   // Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    //Route::post('register', 'RegisterController@register');
});*/

Route::group(['prefix' => 'AuthCustom'], function () {
     Route::get('register', 'ControllerAuthCustom@index');
     Route::post('register_custom', 'ControllerAuthCustom@register');
 });


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'master_materi'],function()
{
    Route::get('/main_master','ControllerMasterMateri@index');
    Route::get('/getall_master_materi','ControllerMasterMateri@getall_master_materi');
    Route::get('/detail_master_materi','ControllerMasterMateri@detail_master_materi');
    Route::post('/create','ControllerMasterMateri@create');
    Route::post('/update','ControllerMasterMateri@update');
    Route::post('/delete','ControllerMasterMateri@delete');
    Route::post('/post_komentar','ControllerKomentar@post_komentar'); 
    Route::get('/get_all_komentar','ControllerKomentar@get_all_komentar'); 
    
});

/*Route::group(['prefix' => 'Komentar'],function()
{
    Route::post('/post_komentar','ControllerKomentar@post_komentar'); 
});*/




Route::group(['prefix' => 'katalog'],function()
{
    Route::get('/main_katalog','ControllerKatalog@index');
    Route::get('/getall_materi','ControllerKatalog@getall_materi');
    Route::get('/detail_katalog','ControllerKatalog@detail_katalog');
});
