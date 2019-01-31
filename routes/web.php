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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/personal-half','half');
Route::post('personal-half','PersonalDetails@halfdetails')->name('half');
Route::view('/dashboard','dashboard');
Route::view('/personal-full','personal');
Route::post('personal-full','PersonalDetails@fulldetails')->name('full');
Route::view('/doc-repo','docrepo');
Route::view('/edu-details','edu_details');
Route::post('/edu-details','PersonalDetails@edudetails')->name('edu');