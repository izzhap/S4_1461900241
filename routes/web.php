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



Route::get('/', 'App\Http\Controllers\SiswaController@index');
Route::get('/siswa/add', 'App\Http\Controllers\SiswaController@add');
Route::post('/siswa/tambah', 'App\Http\Controllers\SiswaController@tambah');
Route::get('/siswa/edit/{id}', 'App\Http\Controllers\SiswaController@edit');
Route::post('/siswa/update', 'App\Http\Controllers\SiswaController@update');
Route::get('/siswa/del/{id}', 'App\Http\Controllers\SiswaController@del');
