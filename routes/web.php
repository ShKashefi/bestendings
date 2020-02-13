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

Route::get('/2', function () {
    return view('welcome');
});

Route::get('/3', function () {
    return view('welcome1');
});

Route::get('/','FormController@ShowForm')->name('showform');
Route::get('/1','FormController@ShowForm')->name('showform');
Route::get('/showform','FormController@ShowForm')->name('showform');
Route::post('/submitform','FormController@SubmitForm')->name('submitform');

Route::post('formm','FormController@dd')->name('formm');
