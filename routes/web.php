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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/home', function () {
        return view('home');
    });
    Route::resource('employes','EmployesController');

    Route::get('/employes/{id}/vacation',    'EmployesController@vacationRequest')->name('vacation.request');
    Route::get('/employes/{id}/certivicate','EmployesController@certivicateRequest')->name('certivicate.request');
});
