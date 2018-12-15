<?php

Auth::routes(['verify' => true]);
Route::redirect('/', '/home');
Route::get('/profile', 'Auth\ProfileController@index')->name('profile.index');
Route::middleware('verified')->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');
});
