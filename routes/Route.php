<?php

use source\Router\web\Route;

Route::get('/dashboard', 'Admin\AdminController@admin');


// Route Of Categories
Route::get('/dashboard/category', 'Admin\CategoryController@index');
Route::get('/dashboard/category/create', 'Admin\CategoryController@create');
Route::post('/dashboard/category/store', 'Admin\CategoryController@store');
Route::get('/dashboard/category/edit/{id}', 'Admin\CategoryController@edit');
Route::post('/dashboard/category/update/{id}', 'Admin\CategoryController@update');
Route::get('/dashboard/category/delete/{id}', 'Admin\CategoryController@delete');

// Route Of Users
Route::get('/dashboard/user', 'Admin\UsersController@index');
Route::get('/dashboard/user/show/{id}', 'Admin\UsersController@show');
Route::get('/dashboard/user/delete/{id}', 'Admin\UsersController@delete');
Route::get('/dashboard/user/status/{id}', 'Admin\UsersController@status');
Route::get('/dashboard/user/message/{id}', 'Admin\UsersController@message');

// Route of Posts
Route::get('/dashboard/post', 'Admin\PostController@index');
Route::get('/dashboard/post/create', 'Admin\PostController@create');
Route::post('/dashboard/post/store', 'Admin\PostController@store');
Route::get('/dashboard/post/show/{id}', 'Admin\PostController@show');
Route::get('/dashboard/post/delete/{id}', 'Admin\PostController@delete');
Route::get('/dashboard/post/edit/{id}', 'Admin\PostController@edit');
Route::post('/dashboard/post/update/{id}', 'Admin\PostController@update');

Route::get('/dashboard/post/show/addphoto/{id}', 'Admin\PhotoController@show');
Route::get('/dashboard/post/show/addphoto/delete/{id}', 'Admin\PhotoController@delete');
Route::post('/dashboard/post/photo/store/{$id}', 'Admin\PhotoController@store');


Route::get('/dashboard/slider', 'Admin\SliderController@index');
Route::get('/dashboard/slider/create', 'Admin\SliderController@create');
Route::post('/dashboard/slider/store', 'Admin\SliderController@store');
Route::get('/dashboard/slider/delete/{id}', 'Admin\SliderController@delete');

Route::get('/dashboard/ads','Admin\AdsController@index');
Route::get('/dashboard/ads/delete/{id}','Admin\AdsController@delete');
Route::get('/dashboard/ads/edit/{id}','Admin\AdsController@edit');
Route::post('/dashboard/ads/update/{id}','Admin\AdsController@update');

// Route Of Main
Route::get('/', 'HomeController@index');
Route::get('/post', 'HomeController@post');
Route::get('/post/{id}', 'HomeController@show');
Route::get('/aboutus','HomeController@aboutus');

