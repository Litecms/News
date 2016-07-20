<?php

// Admin web routes  for news
Route::group(['prefix' => trans_setlocale() . '/admin/news'], function () {
    Route::post('news/status/{news}', 'Litecms\News\Http\Controllers\NewsAdminController@update');
    Route::resource('news', 'Litecms\News\Http\Controllers\NewsAdminController');
});

// Admin API routes  for news
Route::group(['prefix' => trans_setlocale() . 'api/v1/admin/news'], function () {
    Route::resource('news', 'Litecms\News\Http\Controllers\NewsAdminApiController');
});

// User web routes for news
Route::group(['prefix' => trans_setlocale() . '/user/news'], function () {
    Route::resource('news/list', 'Litecms\News\Http\Controllers\NewsUserController@lists');
    Route::resource('news', 'Litecms\News\Http\Controllers\NewsUserController');
});

// User API routes for news
Route::group(['prefix' => trans_setlocale() . 'api/v1/user/news'], function () {
    Route::resource('news', 'Litecms\News\Http\Controllers\NewsUserApiController');
});

// Public web routes for news
Route::group(['prefix' => trans_setlocale() . '/news'], function () {
    Route::get('/news', 'Litecms\News\Http\Controllers\NewsController@news');
    Route::get('/', 'Litecms\News\Http\Controllers\NewsController@index');
    Route::get('/{slug?}', 'Litecms\News\Http\Controllers\NewsController@show');
});

// Public API routes for news
Route::group(['prefix' => trans_setlocale() . 'api/v1/news'], function () {
    Route::get('/', 'Litecms\News\Http\Controllers\NewsApiController@index');
    Route::get('/{slug?}', 'Litecms\News\Http\Controllers\NewsApiController@show');
});
