<?php
Route::get('/','HomeController@getIndex');
//Route::controller('cats','CatController');

// Resource Controllers
Route::resource('owners','OwnersController');
Route::resource('cats','CatsController');
Route::controller('lists','ListsController');



// Authentication Controllers
Route::get('login', array('as' => 'login', 'uses' => 'AuthController@showLogin'));
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');

// Secure-Routes
Route::group(array('before' => 'auth'), function()
{
    Route::get('dashboard', 'DashboardController@showDashboard');
	Route::resource('cats.photos','PhotoController');
});

Route::get('register', 'AccountController@showRegister');
Route::post('register', 'AccountController@postRegister');

//Specific Controller routing - owner control panel options
Route::get('cats/{id}/remove', 'CatsController@destroy');
Route::get('cats/{id}/missing', 'CatsController@missing');
Route::get('cats/{id}/poster', 'CatsController@poster');
Route::get('cats/{id}/home', 'CatsController@home');

//Route::get('add', 'CatController@getAdd');
//Route::post('add', 'CatController@postAdd'); 