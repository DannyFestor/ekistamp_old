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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/prefectures', 'PrefecturesController@index');
Route::get('/prefectures/create', 'PrefecturesController@create');
Route::post('/prefectures', 'PrefecturesController@store');
Route::get('/prefectures/{prefecture}', 'PrefecturesController@show');

Route::get('/cities', 'CitiesController@index');