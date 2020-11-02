<?php


/*
 * Api Routes
 *
 * These routes can only be accessed by users with type `admin`
 */

Route::group(['namespace' => 'Api'],function(){
    Route::get('user_info','ApiController@userInfo');
});


