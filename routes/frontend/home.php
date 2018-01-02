<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'HomeController@index')->name('index');
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/send', 'ContactController@send')->name('contact.send');

Route::get('links', 'LinksController@index')->name('links');

Route::get('allposts', 'PostsController@index')->name('post.allposts');
Route::get('post/{slug}', 'PostsController@thepost')->name('post.thepost');

Route::get('post/comments/{slug}', 'CommentController@index')->name('comments');

Route::post('post/comments', 'CommentController@store')->name('comments.store');

Route::post('post/comments/{commentId}/{type}', 'CommentController@update')->name('comments.update');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    });
});
