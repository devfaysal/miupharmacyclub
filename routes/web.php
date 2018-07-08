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

Route::prefix('manage')->middleware('role:superadministrator')->group(function(){
    Route::get('/', 'ManageController@index')->name('manage.dashboard');
    Route::get('/students', 'ManageController@students')->name('students');

    Route::resource('/student-id', 'StudentIdController');

    Route::resource('/batch', 'BatchController');
});

Route::resource('/profile', 'ProfileController');
