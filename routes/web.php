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
Route::group(['middleware' => 'web'], function(){
    //redirect to login
    Route::auth();
});

Route::group(['middleware' => ['web','auth']], function(){
    //redirect to login
    Route::get('/', function(){
      if(Auth::user()->akses==0){
        return view('admin.home');
      }elseif(Auth::user()->akses==1){
        return view('anggota.home');
      }
    });
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('data_buku', 'BukuController@index');
Route::get('data_anggota', 'AnggotaController@index');