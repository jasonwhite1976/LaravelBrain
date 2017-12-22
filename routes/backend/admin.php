<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::get('linksubmit', 'LinkSubmitController@index')->name('linksubmit');
Route::post('linksubmit', 'LinkSubmitController@send')->name('linksubmit.send');
Route::delete('/deletecat/{id}', 'LinkSubmitController@delete')->name('linksubmit.delete');

Route::get('post', 'FileController@index')->name('post');
Route::get('post/{id}', 'FileController@thepost')->name('post.thepost');
Route::post('post', 'FileController@post')->name('post.post');


Route::get('allposts', 'FileController@allposts')->name('post.allposts');

Route::delete('/deletepost/{id}', 'FileController@delete')->name('post.delete');
