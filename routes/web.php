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


Route::get('/', 'IndexController@welcome');
Route::get('/post', 'IndexController@index');
Route::get('/post/{slug}', 'IndexController@showSinglePost');
Route::get('/user', 'IndexController@userList');
Route::get('/user/{id}', 'IndexController@userComments');
