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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('categories','HomeController@index')->name('categories');

Route::get('/add','HomeController@showAddForm')->name('addCategory');

Route::post('/add','HomeController@createCategory');

Route::get('/edit/{id}','HomeController@showEditForm')->name('edit');

Route::post('/edit/{id}','HomeController@updateCategory');

Route::get('delete/{id}','HomeController@showDeleteForm')->name('delete');

Route::post('/delete/{id}','HomeController@deleteCategory');
