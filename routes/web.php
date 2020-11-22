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

Route::get('/upload_form','UploadController@getform');
Route::post('/upload_file','UploadController@upload')->name('upload_file');


Route::get('/docs_form','DocsController@get_form');

Route::get('/engine_form','DocsController@engine_form');
