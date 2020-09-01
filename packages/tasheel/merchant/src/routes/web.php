<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



Route::get('/', function () {
    return view('tasheel::welcome');
});

Route::get('/password', function () {
    return Hash::make('11111111');
});

Route::group(['middleware' => ['merchant', 'auth'],'namespace'=>"Tasheel\Merchant\Http\Controllers"], function(){
    
    Route::get('/dashboard','MerchantController@index')->name('dashboard');

    Route::get('user', function () {
        return Auth::user();
    });

});

Route::group(['middleware' => ['merchant'],'namespace' => 'Tasheel\Merchant\Http\Controllers'], function () {

    Route::get('/login','AuthMerchantController@showForm')->name('login');
    Route::post('/login','AuthMerchantController@login')->name('user.login');
    Route::get('/logout','AuthMerchantController@logout')->name('user.logout'); 
});

