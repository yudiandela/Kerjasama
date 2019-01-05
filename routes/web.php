<?php
Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/login', 'AuthController@login')->name('auth.login');
Route::post('/login', 'AuthController@storeLogin')->name('auth.storeLogin');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');
Route::get('/register', 'AuthController@register')->name('auth.register');
Route::post('/register', 'AuthController@storeRegister')->name('auth.storeRegister');

// Pengusaha
Route::get('/dasahboard/pengusaha', 'PengusahaController@index')->name('pengusaha.index');

// Pemasok
Route::get('/dasahboard/pemasok', 'PemasokController@index')->name('pemasok.index');