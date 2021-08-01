<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'/ad'],function(){
    Route::group(['prefix'=>'/post'],function(){
        Route::get('/list','postsController@get_list');

        Route::get('/add','postsController@get_add');
        Route::post('/add','postsController@post_add');

        Route::get('/edit/{id}','postsController@get_edit');
        Route::post('/edit','postsController@post_edit');

        Route::get('/del/{id}','postsController@get_del');
    });
});