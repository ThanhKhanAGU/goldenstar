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
use App\Posts;
use App\Information;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Route::group(['prefix'=>'/ad', 'middleware'=>'adminLogin'],function(){
    Route::group(['prefix'=>'/post'],function(){
        Route::get('/list','PostsController@get_list');

        Route::get('/add','PostsController@get_add');
        Route::post('/add','PostsController@post_add');

        Route::get('/edit/{id}','PostsController@get_edit');
        Route::post('/edit/{id}','PostsController@post_edit');

        Route::get('/del/{id}','PostsController@get_del');

        Route::get('/change/{id}','PostsController@get_change');
    });

    Route::group(['prefix'=>'/product'],function(){
        Route::get('/list','ProductController@get_list');

        Route::get('/add','ProductController@get_add');
        Route::post('/add','ProductController@post_add');

        Route::get('/edit/{id}','ProductController@get_edit');
        Route::post('/edit/{id}','ProductController@post_edit');

        Route::get('/del/{id}','ProductController@get_del');
    });
    Route::group(['prefix'=>'/trademark'],function(){
        Route::get('/list','TrademarkController@get_list');

        Route::get('/add','TrademarkController@get_add');
        Route::post('/add','TrademarkController@post_add');

        Route::get('/edit/{id}','TrademarkController@get_edit');
        Route::post('/edit/{id}','TrademarkController@post_edit');

        Route::get('/del/{id}','TrademarkController@get_del');
    });
    Route::group(['prefix'=>'/distributor'],function(){
        Route::get('/list','DistributorController@get_list');

        Route::get('/add','DistributorController@get_add');
        Route::post('/add','DistributorController@post_add');

        Route::get('/edit/{id}','DistributorController@get_edit');
        Route::post('/edit/{id}','DistributorController@post_edit');

        Route::get('/del/{id}','DistributorController@get_del');
    });
    Route::group(['prefix'=>'/action'],function(){
        Route::get('/list','ActionController@get_list');

        Route::get('/add','ActionController@get_add');
        Route::post('/add','ActionController@post_add');

        Route::get('/edit/{id}','ActionController@get_edit');
        Route::post('/edit/{id}','ActionController@post_edit');

        Route::get('/del/{id}','ActionController@get_del');
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
    Route::get('/upload',function(){
        Schema::create('Card', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_tag');
            $table->string('img');
            $table->string('title');
            $table->string('content');
            $table->timestamps();
        });
        echo "đã tạo xong";
    });

});

Route::post('/uploads-cheditor','mainController@up_img');
Route::get('/file-cheditor','mainController@file_img');

/*
 * Route cho người dùng
 */

Route::get('/','mainController@home');
Route::get('/home','mainController@home');
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
