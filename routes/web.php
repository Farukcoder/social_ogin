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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@HomePage');

Route::get('/home', 'HomeController@index');

Route::get('/deshboard', 'DeshboardController@index')->middleware('check');

Route::get('/CallGithub','LoginRegistrationController@CallGithub');

Route::get('/GithubCallback','LoginRegistrationController@GithubCallback');

Route::get('/logout','LoginRegistrationController@logout');
