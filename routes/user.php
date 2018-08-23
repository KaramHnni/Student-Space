<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register user routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "user" middleware group. Now create something great!
|
*/

Route::get('/','indexController@redirectToDashboard')->name('home');
Route::get('/dashboard','DashboardController@show')->name('user.dashboard');
Route::get('/profile','Profile\ProfileController@show')->name('user.profile');
Route::get('/absence','Absences\AbsencesController@show')->name('user.absences');