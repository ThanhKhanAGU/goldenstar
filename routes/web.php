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

Route::group(['prefix'=>'/ad', 'middleware'=>'adminLogin'],function(){
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
    Route::group(['prefix'=>'/set'],function(){
        Route::get('/side','settingController@get_side');
        Route::get('/tag1','settingController@get_tag1');
        Route::get('/tag2','settingController@get_tag2');
        Route::get('/tag3','settingController@get_tag3');
        Route::get('/intr','settingController@get_introduce');
        Route::get('/policy','settingController@get_policy');
        Route::get('/com','settingController@get_communications');
       
        Route::post('/side','settingController@post_side');
        Route::post('/tag1','settingController@post_tag1');
        Route::post('/tag2','settingController@post_tag2');
        Route::post('/tag3','settingController@post_tag3');
        Route::post('/policy','settingController@post_policy');
        Route::post('/com','settingController@post_communications');
    });

    Route::group(['prefix'=>'/user'],function(){
        Route::get('/list','userController@get_list');

        Route::get('/add','userController@get_add');
        Route::post('/add','userController@post_add');

        Route::get('/edit/{id}','userController@get_edit');
        Route::post('/edit/{id}','userController@post_edit');

        Route::get('/{id}','userController@get_edit_user');
        Route::post('/{id}','userController@post_edit_user');

        Route::get('/del/{id}','userController@get_del');
    });
    Route::get('/welcome_to_administrator','mainController@welcome');

});

Route::post('/uploads-cheditor','mainController@up_img');
Route::get('/file-cheditor','mainController@file_img');

/*
 * Route cho người dùng
 */

Route::get('/','mainController@home');
Route::get('/pages','mainController@pages');
Route::get('/page/{id}/{name}.html','mainController@page');
Route::get('plusview/{id}','mainController@plusview');



Route::get('/products','mainController@products');
Route::get('/products/{id}','mainController@inforProduct');
Route::get('/products_img/{id}','mainController@inforProduct_img');
Route::get('/img_product/{id}','mainController@view_img');
Route::get('plusview/{id}','mainController@plusview');
Route::get('/page/{id}/{name}.html','mainController@page');
//product
Route::get('/products','mainController@products');
Route::get('/products/{id}','mainController@inforProduct');
Route::get('/products/{id}.html','mainController@inforProduct');
//action
Route::get('/actions','mainController@get_action');
Route::get('/actions/{id}','mainController@infor_action');
//distributor
Route::get('/distributors','mainController@distributor');
Route::get('/distributors/{id}','mainController@distributor_infor');
//trademark
Route::get('/trademarks','mainController@trademark');
Route::get('/trademarks/{id}','mainController@trademark_infor');
//user
Route::get('login', 'userController@get_dangnhap');
Route::post('ad/login', 'userController@post_dangnhap');
Route::get('ad/logout', 'userController@get_dangxuat');