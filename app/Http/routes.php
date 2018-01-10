<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/desk', function()
{
    return view('amp.canon.landing.landing');
})->name('desk');

Route::get('/mob', function()
{
    return view('amp.amphtml.landing.landing');
})->name('mob');

Route::get('/shambalaya', function()
{
    return view('test');
});

Route::get('color', function()
{
    return view('colour');
});
