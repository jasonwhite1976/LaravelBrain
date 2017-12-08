<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::get('linksubmit', 'LinkSubmitController@index')->name('linksubmit');
Route::post('linksubmit', 'LinkSubmitController@send')->name('linksubmit.send');

Route::get('/deletecat/{id}','LinkSubmitController@delete')->name('linksubmit.delete');
