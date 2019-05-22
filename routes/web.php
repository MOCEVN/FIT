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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
});

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('profile', 'profile');

Route::view('text', 'text');


Route::get('goals', 'GoalsController@index');
Route::get('goals/create', 'GoalsController@create');
Route::post('goals', 'GoalsController@store');
