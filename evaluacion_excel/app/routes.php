<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('login', 'Login@show');
Route::post('login', 'Login@login');
Route::get('logout', 'Login@logOut');

Route::post('register', 'Login@register');

Route::group(['before' => 'auth'], function()
{
    Route::get('/', 'HomeController@showWelcome');
});
