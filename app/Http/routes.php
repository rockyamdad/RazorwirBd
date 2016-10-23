<?php
Route::get('login', 'AuthController@index');
Route::post('auth/login', 'AuthController@store');
Route::get('logout', 'AuthController@getLogout');

Route::get('/', 'HomeController@index');
Route::get('about-us', 'HomeController@aboutUs');

Route::get('dashboard', 'ProductController@index');
Route::get('add', 'ProductController@add');
Route::get('list', 'ProductController@products');
Route::post('product-save', 'ProductController@store');


