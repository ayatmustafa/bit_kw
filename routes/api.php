<?php

use Illuminate\Http\Request;

Route::post('login', 'API\UserController@login')->name('login');
Route::middleware(['auth:api','isAdmin'])->group(function(){
    Route::post('adduser', 'API\UserController@store')->name('adduser');
    Route::get('logout', 'API\UserController@logout')->name('logout');
    Route::post('details', 'API\UserController@details');
});



