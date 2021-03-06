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

Route::redirect('/', '/home');

Auth::routes(['verify' => true]);

Route::namespace('Views')->middleware('verified')->group(function () {
    Route::get('/home',    'HomeController@index'  )->name('index'  );
    Route::get('/profile', 'HomeController@profile')->name('profile');
});
