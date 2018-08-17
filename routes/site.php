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
Route::get('/sign-in','Auth\SignInController@show')->name('login');
Route::post('/sign-in','Auth\SignInController@authentificate');
Route::get('/sign-up','Auth\SignUpController@show')->name('site.sign-up');
Route::get('/sign-up/student','Auth\SignUpController@showStudent')->name('site.sign-up.student');
Route::get('/sign-up/teacher','Auth\SignUpController@showTeacher')->name('site.sign-up.teacher');
Route::post('/sign-up/student','Auth\SignUpController@registerStudent');
Route::post('/sign-up/teacher','Auth\SignUpController@registerTeacher');
Route::get('/sign-up/student/info','Auth\SignUpController@showStudentInfo')->name('site.sign-up.student.info');
Route::post('/sign-up/student/info','Auth\SignUpController@registerStudentInfo');
Route::get('/sign-out','Auth\SignOutController@signout')->name('site.sign-out');

