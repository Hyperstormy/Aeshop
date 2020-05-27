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

Route::get('/', 'IndexController@index');
Route::post('/sort', 'IndexController@sort');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/item', 'HomeController@store');
Route::delete('/item/{id}', 'HomeController@destroy');