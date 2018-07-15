<?php

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

Auth::routes();

Route::get('/', 'HomeController@welcome')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/donor/list', 'HomeController@donorList')->name('donor.list');

Route::prefix('manage')->middleware('role:superadministrator')->group(function(){
    Route::get('/', 'ManageController@index')->name('manage.dashboard');
    Route::get('/students', 'ManageController@students')->name('students');
    Route::get('/students/{id}', 'ManageController@showStudent')->name('student.show');

    Route::resource('/admin', 'AdminController')->except('destroy');

    Route::resource('/student-id', 'StudentIdController')->except('destroy');

    Route::resource('/batch', 'BatchController')->except('destroy');

    Route::resource('/donation', 'DonationController')->except('destroy');
});

Route::resource('/profile', 'ProfileController')->except('destroy');

