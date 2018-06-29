<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/anime', 'HomeController@anime')->name('anime');
Route::get('/list', 'HomeController@list')->name('list');
Route::get('/series', 'HomeController@series')->name('series');