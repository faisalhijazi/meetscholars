<?php


Route::get('/' , 'AppController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
