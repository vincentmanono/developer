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
Route::get('/bloghome','PageController@blog')->name('blog.home');
Route::get('/blogmore/{slug}','PageController@blogmore')->name('blogmore.show');
Route::post('/newsletter','PageController@newsletter')->name('newsletter.store');
Route::get('/services','PageController@services')->name('services');
Route::post('/footer','PageController@footer')->name('footer');
Route::post('subscribe','SubscriberController@store')->name('subscribe.store');

Auth::routes();

// Auth::routes([
//     'register'=>false
// ]);



Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/blog', 'BlogController');
    Route::resource('portfolios', 'PortfolioController');
    Route::resource('/clients', 'ClientController');
    Route::resource('/users','UserController');
    Route::get('/newsletters','SubscriberController@index')->name('newsletter');

});

