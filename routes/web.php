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

Route::get('/contact',function(){
	return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('food','FoodController');

Route::get('/food-check',[
    'as'=>'food.check',
    'uses'=>'VolunteerController@foodCheck'
]);

Route::get('/food-checker',[
    'as'=>'food.food_checking',
    'uses'=>'FoodController@foodChecker'
]);

Route::get('/food-checking-status-fail',[
    'as'=>'food.foodCheckingFail',
    'uses'=>'FoodController@foodCheckingFail'
]);

Route::get('/food-checking-status-pass',[
    'as' => 'food.foodCheckingPass',
    'uses' => 'FoodController@foodCheckingPass'
]);

Route::resource('user','UserController');

Route::resource('/volunteer','VolunteerController');

Route::get('/profile',[
    'as'=>'user.profile',
    'uses'=>'UserController@showProfile'
]);