<?php


Route::get('/' , 'AppController@index');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/{id}','AppController@profile');
Route::post('/about/store','AppController@storeProfile');
Route::get('/mentors' , 'AppController@monitors');
Route::get('/scholarships' , 'AppController@scholarships');
Route::get('/book/{id}/now' , 'AppController@booking');

Route::get('/room/12b','AppController@room');

Route::get('/search','AppController@search');
