<?php
Route::get('/','SjunitController@index');
Route::post('/','SjunitController@store')->name('sjunit.store');
// 测试路由
Route::get('test', 'TestController@index');