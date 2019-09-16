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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/feedback', 'FeedbackController@leaveFeedback');

Route::post('/insertData', 'FeedbackController@insertData');

Route::get('/success-feedback', 'SuccessFeedbackController@printThanks');

Route::get('/review', 'ReviewController@printReviews');