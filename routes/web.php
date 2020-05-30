<?php

use Illuminate\Support\Facades\Route;

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

// Notes: https://laravel.com/docs/5.2/controllers#restful-supplementing-resource-controllers
// https://stackoverflow.com/questions/28714675/laravel-5-route-not-defined-while-it-is
Route::get('/rates/{rate}/delete', ['as' => 'rates.delete', 'uses' => 'RatesController@delete']);

Route::resource('/rates', 'RatesController');
