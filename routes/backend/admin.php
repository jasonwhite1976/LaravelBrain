<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

/*********/

Route::get('newlink', 'LinkController@index')->name('link');
Route::post('newlink', 'LinkController@newlink')->name('link.newlink');

Route::get('editlink/{id}', 'LinkController@editlink')->name('link.editlink');
Route::patch('edit_link/{id}', 'LinkController@edit_link')->name('link.edit_link');

Route::get('all_links', 'LinkController@all_links')->name('link.all_links');

Route::delete('/deletelink/{id}', 'LinkController@deletelink')->name('link.deletelink');

/*********/

Route::get('newpost', 'PostsController@index')->name('post');
Route::post('newpost', 'PostsController@newpost')->name('post.newpost');

Route::get('editpost/{slug}', 'PostsController@editpost')->name('post.editpost');
Route::patch('edit_post/{slug}', 'PostsController@edit_post')->name('post.edit_post');

Route::get('post/{slug}', 'PostsController@thepost')->name('post.thepost');

Route::get('allposts', 'PostsController@allposts')->name('post.allposts');

Route::delete('/deletepost/{slug}', 'PostsController@delete')->name('post.delete');

/*********/

Route::get('/{pageId}', function($pageId){
  return view('backend.page',['pageId' => $pageId]);
});

Route::get('comments/{pageId}', 'CommentController@index')->name('comments');
Route::post('comments', 'CommentController@store')->name('comments.store');
Route::post('comments/{commentId}/{type}', 'CommentController@update')->name('comments.update');

Route::get('post/comments/{slug}', 'CommentController@index')->name('comments');
Route::post('post/comments', 'CommentController@store')->name('comments.store');
Route::post('post/comments/{slug}/{type}', 'CommentController@update')->name('comments.update');
