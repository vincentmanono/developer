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
Route::get('/contact-us','PageController@contact')->name('contact-us');
Route::get('/faq','PageController@faq')->name('faq');
Route::post('/contact','ContactController@store')->name('contact.post');
Route::post('/comment','CommentController@store')->name('comment.post');
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
    Route::resource('/mailbox', 'MailboxController');
    Route::get('/contactdetails','ContactController@index')->name('contact.index');
    Route::get('contactmore/{id}','ContactController@show')->name('contact.show');
    Route::delete('contactdelete/{id}','ContactController@destroy')->name('contact.del');
});

