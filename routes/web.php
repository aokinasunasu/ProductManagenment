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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index');

// 商品一覧
Route::get('/product', 'ProductsController@index');
// 新規
Route::get('/product/new', 'ProductsController@new');
// 編集
Route::get('/product/edit', 'ProductsController@edit');
// 更新
Route::post('/product/update', 'ProductsController@update');
// 削除
Route::post('/product/delete', 'ProductsController@delete');

// 取引先一覧
Route::get('/suppliers', 'SuppliersController@index');
// 新規
Route::get('/suppliers/new', 'SuppliersController@new');
// 編集
Route::get('/suppliers/edit', 'SuppliersController@edit');
// 更新
Route::post('/suppliers/update', 'SuppliersController@update');
// 削除
Route::post('/suppliers/delete', 'SuppliersController@delete');
