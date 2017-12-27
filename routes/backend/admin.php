<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::get('linksubmit', 'LinkSubmitController@index')->name('linksubmit');
Route::post('linksubmit', 'LinkSubmitController@send')->name('linksubmit.send');
Route::delete('/deletecat/{id}', 'LinkSubmitController@delete')->name('linksubmit.delete');

Route::get('newpost', 'PostsController@index')->name('post');
Route::post('newpost', 'PostsController@newpost')->name('post.newpost');

Route::get('editpost/{slug}', 'PostsController@editpost')->name('post.editpost');
Route::patch('edit_post/{slug}', 'PostsController@edit_post')->name('post.edit_post');

Route::get('post/{slug}', 'PostsController@thepost')->name('post.thepost');

Route::get('allposts', 'PostsController@allposts')->name('post.allposts');

Route::delete('/deletepost/{slug}', 'PostsController@delete')->name('post.delete');
