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

Auth::routes(['register' => false]);
Route::get('/dashboard', 'HomeController@index');
Route::post('/import_excel', 'HomeController@uploadContent');
Route::get('/PKKMB/{NIM}','Utama@utama');
Route::post('/delete/{NIM}', 'HomeController@deleteData');
Route::get('/submitdata', 'HomeController@tambahData');
Route::post('/submit', 'HomeController@submitData');
Route::get('/export_excel', 'HomeController@export');
