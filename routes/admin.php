<?php

use Illuminate\Support\Facades\Route;



Route::resource('/AdminUser', AdminUserController::class);
// Route::get('/Admin-User','AdminUserController@index')->name('Admin-User');
// Route::namespace('Admin')->group(function () {




    Route::get('/index', function () 
    {
       return view('user.index');
    });

    // Route::resource('/AdminUser', UserController::class);
    // Route::resource('/Admin-User', AdminUserController);
  
  

