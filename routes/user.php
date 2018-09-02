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
Route::get('/profile','Profile\OverviewController@show')->name('user.profile');
Route::get('/profile/edit/details','Profile\DetailsController@show')->name('user.profile.edit.details');
Route::post('/profile/edit/details/student','Profile\DetailsController@updateStudent')->name('user.profile.edit.details.student');
Route::post('/profile/edit/details/teacher','Profile\DetailsController@updateTeacher')->name('user.profile.edit.details.teacher');

Route::get('/absence','Absences\student\AbsencesController@show')->name('user.absence')->middleware('AccessStudent');
Route::get('/absence/{id}/justify','Absences\student\JustificationsController@show')->name('user.absence.justify')->middleware('AccessStudent');
Route::post('/absence/justify','Absences\student\JustificationsController@store')->name('user.absence.justified')->middleware('AccessStudent');
Route::get('/absence/create','Absences\teacher\AbsencesController@create')->name('user.absence.create')->middleware('AccessTeacher');