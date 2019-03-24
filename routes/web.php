<?php


Route::get('/', 'ApplicationController@index');
Route::get('contact', 'ApplicationController@contact')->name('contact');
Route::post('contact', 'ApplicationController@contactAction')->name('contact');


Route::group(['namespace' => 'backend', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');


});

