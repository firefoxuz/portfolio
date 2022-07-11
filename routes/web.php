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
// Login routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'controller' => 'App\Admin\Controllers\Auth\LoginController'], function () {
    Route::get('login', 'showPage')->name('login');
    Route::post('login', 'login')->name('login.post');
});

// Authenticated user's routes
Route::group(['prefix' => 'admin', 'namespace' => 'App\Admin\Controllers', 'as' => 'admin.', 'middleware' => ['auth:web']], function () {
    Route::post('logout', 'Auth\LogoutController')->name('logout');
    Route::get('home', 'Home\HomeController')->name('home');
    Route::resource('social-networks', 'SocialNetwork\SocialNetworkController')->except(['show']);
    Route::get('contacts', 'Contact\ContactController@index')->name('contacts.index');
    Route::resource('experiences', 'Experience\ExperienceController');
    Route::resource('educations', 'Education\EducationController');
    Route::resource('portfolios', 'Portfolio\PortfolioController');
    Route::resource('portfolio-technologies', 'Portfolio\PortfolioTechnologyController')->only(['store', 'destroy']);
    Route::resource('portfolio-photos', 'Portfolio\PortfolioPhotoController')->only(['store', 'destroy']);
});

Route::group(['namespace' => 'App\Frontend\Controllers',], function () {
    Route::get('/', 'Home\HomeController@index')->name('home.index');
    Route::get('/portfolio-content/{portfolio}','Portfolio\PortfolioContentController')->name('portfolio.content');
    Route::post('/contact/store','Contact\StoreContactController')->name('contact.store');

});
