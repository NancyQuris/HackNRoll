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

Route::get('/users/visitHome', 'UserController@visitHome');
Route::resource('users', 'UserController');

Route::get('/chat', 'ChatsController@index');
Route::get('./chat/messages', 'ChatsController@fetchMessages');
Route::post('/chat/messages', 'ChatsController@sendMessage');
Route::get('/message', 'MessageController@index')->name('message');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('messages', 'ChatsController@fetchMessages');

Route::post('messages', 'ChatsController@sendMessage');

Route::get('/homeForm', 'pageController@homeForm');

Route::post('/homeForm', 'HomeController@storeIntro');

Route::get('/testform', function(){
    return view('user.testform');
});

Route::get('/user/testForm', 'pageController@testForm');

Route::get('/user/editBackground', 'pageController@editBackground');

Route::get('/user/editPhoto', 'pageController@editPhoto');

Route::post('/answer','AnswerController@analyze');

Route::post('uploadBackground', 'UploadController@uploadBackground');

Route::post('uploadPhoto', 'UploadController@uploadPhoto');

Route::post('send', 'ChatsController@send');

Route::get('check',function(){
	return session('chat');
});

Route::post('saveToSession','ChatsController@saveToSession');
Route::post('deleteSession','ChatsController@deleteSession');
Route::post('getOldMessage','ChatsController@getOldMessage');

