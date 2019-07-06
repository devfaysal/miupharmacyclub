<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\DonationController;

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

    Route::get('/donations', [DonationController::class, 'index']);

    Route::get('/donations/create', [DonationController::class, 'create']);

    Route::post('/donations', [DonationController::class, 'store']);
});

Route::get('/donations', [DonationController::class, 'index'])->name('donation.index');

Route::get('/members', [MemberController::class, 'index'])->middleware('auth');

Route::get('/members/{batch}', [MemberController::class, 'batch'])->middleware('auth');

Route::resource('/profile', 'ProfileController')->except('destroy');


Route::get('/test', function(){
    $batches = App\Batch::orderBy('name')->get();
    return view('v2.members', [
        'batches' => $batches
    ]);
});

