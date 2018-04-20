<?php


Route::get('/' , 'AppController@index');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/{id}','AppController@profile');
Route::post('/about/store','AppController@storeProfile');
Route::get('/mentors' , 'AppController@monitors');
