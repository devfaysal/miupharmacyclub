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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/take-me-home', 'HomeController@takeMeHome')->name('takeMeHome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('manage')->middleware('role:superadministrator')->group(function(){
    Route::get('/', 'ManageController@index')->name('manage.dashboard');
    Route::get('/students', 'ManageController@students')->name('students');

    Route::get('/student-id', 'StudentIdController@index')->name('studentId.index');
    Route::get('/student-id/create', 'StudentIdController@create')->name('studentId.create');
    Route::post('/student-id', 'StudentIdController@store')->name('studentId.store');

    Route::resource('/batch', 'BatchController');
});