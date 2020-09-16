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
Route::get('/','PageController@index')->name('index');
Route::get('/about','PageController@about')->name('about');
Route::get('/portfolio','PageController@portfolio')->name('portfolio');
Route::get('/contact','PageController@contact')->name('contact');
Route::get('/contact','PageController@contact')->name('contact');
Route::get('/blog','PageController@blog')->name('blog');
Route::get('/blogmore','PageController@blogmore')->name('blogmore');
Route::get('/services','PageController@services')->name('services');
Route::post('/footer','PageController@footer')->name('footer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
