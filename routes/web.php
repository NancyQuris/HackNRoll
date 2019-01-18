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

<<<<<<< HEAD
Route::get('/', 'pageController@home');

Route::get('/aboutUs', 'pageController@aboutUs');

/*
Route::get('/Users/{user}', function (App\User $user) {
    return $user;
=======
Route::get('/', function () {
    return view('home');
>>>>>>> 3a272c594d50a0a0a91dbf9c1da03cc92f47c45d
});
*/

Route::resource('users', 'UserController');

Route::get('/chat', 'ChatsController@index');
Route::get('./chat/messages', 'ChatsController@fetchMessages');
Route::post('/chat/messages', 'ChatsController@sendMessage');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
