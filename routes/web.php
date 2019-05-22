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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // 商品
    // 一覧
    Route::get('/product', 'ProductsController@index');
    // 新規
    Route::get('/product/new', 'ProductsController@new');
    // 編集
    Route::get('/product/edit', 'ProductsController@edit');
    // 更新
    Route::post('/product/update', 'ProductsController@update');
    // 削除
    Route::post('/product/delete', 'ProductsController@delete');

    // 取引先
    // 一覧
    Route::get('/suppliers', 'SuppliersController@index');
    // 新規
    Route::get('/suppliers/new', 'SuppliersController@new');
    // 編集
    Route::get('/suppliers/edit', 'SuppliersController@edit');
    // 更新
    Route::post('/suppliers/update', 'SuppliersController@update');
    // 削除
    Route::post('/suppliers/delete', 'SuppliersController@delete');

    // 入出庫 TODO Vue化 API化
    // 一覧
    Route::get('/order', 'OrdersController@index');
    // 新規
    Route::get('/ajax/order/new', 'OrdersController@new');
    // 編集
    Route::post('/ajax/order/edit', 'OrdersController@edit');
    // 新規明細
    Route::post('/ajax/order/items_new', 'OrdersController@items_new');
    // 更新
    Route::post('/ajax/order/update', 'OrdersController@update');
    // 削除
    Route::post('/order/delete', 'OrdersController@delete');

    // 定義 TODO Vue化 API化
    // 一覧
    Route::get('/definitons', 'DefinitionsController@index');
    // 編集
    Route::post('/ajax/definiton/edit', 'DefinitionsController@edit');
    // 更新
    Route::post('/ajax/definiton/update', 'DefinitionsController@update');
});