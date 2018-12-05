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


Route::group(['namespace' => 'Auth'], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'master_materi'],function()
{
    Route::get('/main_master','ControllerMasterMateri@index');
    Route::get('/getall_master_materi','ControllerMasterMateri@getall_master_materi');
    Route::post('/create','ControllerMasterMateri@create');
    Route::post('/update','ControllerMasterMateri@update');
    Route::post('/delete','ControllerMasterMateri@delete');
});
