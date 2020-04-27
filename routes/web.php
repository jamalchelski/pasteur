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

Route::get('/', 'LandingController@landing');
Route::get('/product', 'LandingController@product');
Route::get('/contact', 'LandingController@contact');
Route::get('/price', 'LandingController@price');
Route::get('/registration', 'RegistationController@index')->name('registration');
Route::post('/registration', 'RegistationController@store');
Route::get('/instagram', 'InstagramController@instagramfeed');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

