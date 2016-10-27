<?php
Route::get('login', 'AuthController@index');
Route::post('auth/login', 'AuthController@store');
Route::get('logout', 'AuthController@getLogout');

Route::get('/', 'HomeController@index');
Route::get('about-us', 'HomeController@aboutUs');
Route::get('new-arrival', 'HomeController@newArrival');
Route::get('all-products', 'HomeController@products');
Route::get('product-view/{id}', 'HomeController@productView');

Route::get('dashboard', 'ProductController@index');
Route::get('add', 'ProductController@add');
Route::get('list', 'ProductController@products');
Route::post('product-save', 'ProductController@store');
Route::get('edit/{id}', 'ProductController@edit');
Route::post('edit/{id}', 'ProductController@postUpdate');

