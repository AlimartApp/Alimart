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
Route::get('/', 'ClientController@index');
Route::get('login', 'AuthController@showLogin')->name('login');
Route::POST('login', 'AuthController@login')->name('loginuser');
Route::get('register', 'AuthController@showFormRegister')->name('register');
Route::post('register', 'AuthController@register');
Route::group(['middleware' => 'auth'], function(){
    Route::get('/admin/home', 'HomeController@index')->name('home');
    Route::get('/admin/peserta', 'PesertaController@index')->name('peserta');
    Route::get('/admin/kriteria', 'KriteriaController@index')->name('kriteria');

    Route::get('/admin/peserta_edit/{id_peserta}', 'PesertaController@edit')->name('peserta.edit');
    Route::PUT('/admin/peserta/{id_peserta}/data', 'PesertaController@update')->name('update.peserta');

    Route::get('logout', 'AuthController@logout')->name('logout');
});