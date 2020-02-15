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



Route::resource('/', 'CursoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/autenticado', 'Autenticado@index')->name('Autenticado');
Route::get('/autenticado/test1', 'Autenticado@test1')->name('Test1');