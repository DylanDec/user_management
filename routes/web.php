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


Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('auth', 'can:manage-users')->group(function (){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

Route::namespace('News')->prefix('news')->name('news.')->middleware('auth')->group(function (){
    Route::resource('/news', 'NewsController', ['except' => ['store']]);
});
