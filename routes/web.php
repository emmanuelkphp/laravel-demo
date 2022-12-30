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

Route::get('/login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::get('/register', 'App\Http\Controllers\AuthController@create')->name('register');
Route::get('/home', 'App\Http\Controllers\DashboardController@index')->name('home');
Route::put('/profile', 'App\Http\Controllers\ProfileController@update')->name('profile.update');
Route::get('/about', 'App\Http\Controllers\ProfileController@create')->name('about');
Route::post('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');
Route::post('/user-register', 'App\Http\Controllers\AuthController@store')->name('user-register');
Route::post('/user-login', 'App\Http\Controllers\AuthController@login')->name('user-login');

Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile');
Route::put('profile-update/{id}', 'App\Http\Controllers\ProfileController@update')->name('profile-update');

Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');

Route::get('students', 'App\Http\Controllers\StudentsController@index')->name('students');
Route::get('add-student', 'App\Http\Controllers\StudentsController@create')->name('add-student');
Route::post('store-student', 'App\Http\Controllers\StudentsController@store')->name('store-student');
Route::get('delete-student/{id}', 'App\Http\Controllers\StudentsController@destroy')->name('delete-student');
Route::get('edit-student/{id}', 'App\Http\Controllers\StudentsController@edit')->name('edit-student');
Route::put('update-student/{id}', 'App\Http\Controllers\StudentsController@update')->name('update-student');


