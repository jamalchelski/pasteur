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
//email
Route::get('/email', function () {
    return view('send_email');
});
Route::post('/sendEmail', 'Email@sendEmail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/formulir', 'HomeController@formulir')->name('home');
Route::post('/home/proses', 'HomeController@proses_upload');
Route::get('/home/hapus/{id}', 'HomeController@hapus');
Route::get('/formulir/{id}', 'HomeController@del');

