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

// Auth::routes();
Route::get('login')->name('login')->uses('Auth\LoginController@showLoginForm');
Route::post('login')->name('login.attempt')->uses('Auth\LoginController@login');
Route::post('logout')->name('logout')->uses('Auth\LoginController@logout');

Route::get('/', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

Route::post('/save', 'HomeController@store')->name('home.store')->middleware('auth');
