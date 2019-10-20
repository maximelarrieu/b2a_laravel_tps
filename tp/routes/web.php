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

Route::get('/test', 'TestController@index');

Route::get('/bonsoir', function() {
    return view('bonsoir', ['name' => 'Fabrice']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:admin']], function() {
    Route::get('/admin', 'AdminController@index');
});
Route::group(['middleware' => ['role:writer']], function() {
    Route::get('/writer', 'WriterController@index');
});
Route::group(['middleware' => ['role:reader']], function() {
    Route::get('/reader', 'ReaderController@index');
});
