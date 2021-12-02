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

Route::get('/', 'ItemController@index')->name('item.index');
Route::get('/create', 'ItemController@create')->name('item.create');
Route::post('/', 'ItemController@store')->name('item.store');
Route::get('/{id}/edit', 'ItemController@edit')->name('item.edit');
Route::put('/update/{id}', 'ItemController@update')->name('item.update');
Route::delete('/delete/{id}', 'ItemController@destroy')->name('item.destroy');
