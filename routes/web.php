<?php

use App\Http\Controllers\UserController;
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

Route::get('/test', 'App\Http\Controllers\UserController@getAll');
// Route::get('/test', 'UserController@getAll');
Route::get('/users', 'App\Http\Controllers\UserController@index');
Route::get('/users/app', function(){
    return view('users.app');
});
Route::get('/users/{user_id}','App\Http\Controllers\UserController@detailById' );
Route::get('/users/edit/{user_id}','App\Http\Controllers\UserController@editUser' );
Route::get('/mess', 'App\Http\Controllers\MessageController@getAll');

Route::get('/challenges','App\Http\Controllers\ChallengeController@index');