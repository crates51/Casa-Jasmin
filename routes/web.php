<?php

// Route::get('/hello', function () {
//     return '<h1>Hello World</h1>';
// });

// Route::get('/users/{id}/{name}',function($id,$name){
// 	return "This is ".$name." with id: ".$id;
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts','PostsController');





Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
