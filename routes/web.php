<?php

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::redirect('/register', '/')->name('register');
// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

Route::prefix('/password')->name('password.')->group(function () {
    Route::get('/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('request');
    Route::post('/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('email');
    Route::get('/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('reset');
    Route::post('/reset', 'Auth\ResetPasswordController@reset')->name('update');
});

Route::prefix('/email')->name('verification.')->group(function () {
    Route::get('/verify', 'Auth\VerificationController@show')->name('notice');
    Route::get('/verify/{id}', 'Auth\VerificationController@verify')->name('verify');
    Route::get('/resend', 'Auth\VerificationController@resend')->name('resend');
});

Route::get('/profile', 'Auth\ProfileController@index')->name('profile.index');

Route::middleware('verified')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
