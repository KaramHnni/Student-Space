<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register site routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "site" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@show')->name('site.home');
Route::get('/services','Ressources\ServicesController@show')->name('site.services');
Route::get('/about','Ressources\AboutController@show')->name('site.about');
Route::get('/contact','Ressources\ContactController@show')->name('site.contact');

