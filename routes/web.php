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

Route::get('/', 'pageController@home');

Route::get('/aboutUs', 'pageController@aboutUs');

/*
Route::get('/Users/{user}', function (App\User $user) {
    return $user;
});
*/

Route::resource('users', 'UserController');

