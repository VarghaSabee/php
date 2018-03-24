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

Route::get('/', function () {
    return view('test');
});

Route::get('login/google', 'GoogleController@redirectToProvider')->name("google.login");
Route::get('login/google/callback', 'GoogleController@handleProviderCallback');

Route::get('login/twitter', 'TwitterController@redirectToProvider')->name("twitter.login");
Route::get('login/twitter/callback', 'TwitterController@handleProviderCallback');

Route::get('login/facebook', 'FacebookController@redirectToProvider')->name("facebook.login");
Route::get('login/facebook/callback', 'FacebookController@handleProviderCallback');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test');

Route::get('/opit', 'HomeController@opit');

Route::post('/vote', 'HomeController@vote')->name('vote');