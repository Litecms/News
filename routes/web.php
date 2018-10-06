<?php

// Resource routes  for news
Route::group(['prefix' => set_route_guard('web').'/news'], function () {
    Route::resource('news', 'NewsResourceController');
});

// Public  routes for news
Route::get('news/popular/{period?}', 'NewsPublicController@popular');
Route::get('news/', 'NewsPublicController@index');
Route::get('news/{slug?}', 'NewsPublicController@show');
Route::get('news/category/{slug?}', 'NewsPublicController@categorydisplay');
Route::get('news/tag/{tag?}', 'NewsPublicController@tagdisplay');



// Resource routes  for category
Route::group(['prefix' => set_route_guard('web').'/news'], function () {
    Route::resource('category', 'CategoryResourceController');
});

// Public  routes for category
Route::get('category/popular/{period?}', 'CategoryPublicController@popular');
Route::get('categories/', 'CategoryPublicController@index');
Route::get('category/{slug?}', 'CategoryPublicController@show');


// Resource routes  for comment
Route::group(['prefix' => set_route_guard('web').'/news'], function () {
    Route::resource('comment', 'CommentResourceController');
});

// Public  routes for comment
Route::get('comment/popular/{period?}', 'CommentPublicController@popular');
Route::get('comments/', 'CommentPublicController@index');
Route::get('comment/{slug?}', 'CommentPublicController@show');


// Resource routes  for tag
Route::group(['prefix' => set_route_guard('web').'/news'], function () {
    Route::resource('tag', 'TagResourceController');
});

// Public  routes for tag
Route::get('tag/popular/{period?}', 'TagPublicController@popular');
Route::get('tags/', 'TagPublicController@index');
Route::get('tag/{slug?}', 'TagPublicController@show');

