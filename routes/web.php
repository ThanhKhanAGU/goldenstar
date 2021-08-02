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
        Route::post('/edit/{id}','postsController@post_edit');

        Route::get('/del/{id}','postsController@get_del');

        Route::get('/change/{id}','postsController@get_change');
    });

    Route::group(['prefix'=>'/product'],function(){
        Route::get('/list','productController@get_list');

        Route::get('/add','productController@get_add');
        Route::post('/add','productController@post_add');

        Route::get('/edit/{id}','productController@get_edit');
        Route::post('/edit/{id}','productController@post_edit');

        Route::get('/del/{id}','productController@get_del');
    });
    Route::group(['prefix'=>'/trademark'],function(){
        Route::get('/list','trademarkController@get_list');

        Route::get('/add','trademarkController@get_add');
        Route::post('/add','trademarkController@post_add');

        Route::get('/edit/{id}','trademarkController@get_edit');
        Route::post('/edit/{id}','trademarkController@post_edit');

        Route::get('/del/{id}','trademarkController@get_del');
    });
    Route::group(['prefix'=>'/distributor'],function(){
        Route::get('/list','distributorController@get_list');

        Route::get('/add','distributorController@get_add');
        Route::post('/add','distributorController@post_add');

        Route::get('/edit/{id}','distributorController@get_edit');
        Route::post('/edit/{id}','distributorController@post_edit');

        Route::get('/del/{id}','distributorController@get_del');
    });
    Route::group(['prefix'=>'/action'],function(){
        Route::get('/list','actionController@get_list');

        Route::get('/add','actionController@get_add');
        Route::post('/add','actionController@post_add');

        Route::get('/edit/{id}','actionController@get_edit');
        Route::post('/edit/{id}','actionController@post_edit');

        Route::get('/del/{id}','actionController@get_del');
    });
});

Route::post('/uploads-cheditor','mainController@up_img');
Route::get('/file-cheditor','mainController@file_img');

/*
 * Route cho người dùng
 */

Route::get('/','listpagesController@products');