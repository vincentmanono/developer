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

Route::get('/', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/portfolio', 'PageController@portfolio')->name('portfolio');
Route::get('/contact-us', 'PageController@contact')->name('contact-us');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::post('/contact', 'ContactController@store')->name('contact.post');


Route::group(['prefix' => 'news'], function () {
    Route::get('/blogs', 'PageController@blog')->name('blog.home');
    Route::get('/blog/{slug}', 'PageController@singleblog')->name('blog.single');
    Route::post('/blog/{slug}/comment-add', 'CommentController@store')->name('comment.post');
});

Route::get('/blogmore/{slug}', 'PageController@blogmore')->name('blogmore.show');
Route::post('/newsletter', 'SubscriberController@store')->name('newsletter.store');
Route::get('/services', 'PageController@services')->name('services');
Route::group(['prefix' => 'services'], function () {
    Route::get('website-development-at-lagaster', function () {
        return view('client.services.website');
    })->name('website-development');
    Route::get('network-configuration-management-at-lagaster', function () {
        return view('client.services.network');
    })->name('network-management');
    Route::get('graphic-design-at-lagaster', function () {
        return view('client.services.graphic-design');
    })->name('Graphic-Design');
    Route::get('application-development-at-lagaster', function () {
        return view('client.services.android');
    })->name("application-development");
});

Route::post('/footer', 'PageController@footer')->name('footer');
Route::post('subscribe', 'SubscriberController@store')->name('subscribe.store');


Auth::routes([
    'register'=>false
]);



Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/blog', 'BlogController');
    Route::resource('portfolios', 'PortfolioController');
    Route::resource('/clients', 'ClientController');
    Route::resource('/users', 'UserController');
    Route::get('/newsletters', 'SubscriberController@index')->name('newsletter');
    Route::resource('/mailbox', 'MailboxController');
    Route::get('/contactdetails', 'ContactController@index')->name('contact.index');
    Route::get('contactmore/{id}', 'ContactController@show')->name('contact.show');
    Route::delete('contactdelete/{id}', 'ContactController@destroy')->name('contact.del');
    Route::delete('/commentdelete/{id}', 'CommentController@destroy')->name('comment.del');
    Route::get('/project/{id}', 'PortfolioUserController@show')->name('port.show');
    Route::get('/proindex', 'PortfolioUserController@index')->name('port.index');
});
