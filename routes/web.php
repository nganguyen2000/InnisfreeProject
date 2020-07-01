<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/auth/login', "Auth\LoginController@login");
Route::get('/auth/login',"Auth\LoginController@index")->name('auth.login');

Route::get('/auth/register',"Auth\RegisterController@index")->name("auth.register");
Route::post('/auth/register', "Auth\RegisterController@register");

Route::get('/home',"User\HomeController@index")->name('home');
Route::get('/admin/dashboard','Admin\DashBoardController@index')->name('admin.dashboard');
Route::post('auth/logout',"Auth\LoginController@logout");

Route::post('/admin/user/index',"Admin\ManageUserController@index");
Route::delete('/user/index/{id}',"Admin\ManageUserController@delete");
Route::get('/admin/user/index',"Admin\ManageUserController@index")->name('admin.user.index');
Route::get('/user/index/{id}/edit',"Admin\ManageUserController@edit");
Route::patch('/user/index/{id}',"Admin\ManageUserController@update");

route::get('admin/product/index',"Admin\ManageProductController@index")->name('admin.product.index');
route::get('admin/product/create',"Admin\ManageProductController@create");
Route::post('admin/product/store',"Admin\ManageProductController@store");
Route::delete('/product/index/{id}',"Admin\ManageProductController@delete");
Route::get('/product/index/{id}/edit',"Admin\ManageProductController@edit");
Route::patch('/product/index/{id}',"Admin\ManageProductController@update");

Route::get('/home/detail/{id}',"User\HomeController@detail");

Route::post('/user/add/{id}',"User\HomeController@addtocart");
Route::get('user/cart',"User\HomeController@showCart")->name('cart.index');
Route::delete('cart/index/{id}',"User\HomeController@destroyCart");
Route::post('cart/update/{id}',"User\HomeController@updateQuantity");

Route::get('/home/header',"User\HomeController@cate");
Route::get('home/category/{id}',"User\HomeController@showFollowCate");
Route::post('search/sanpham',"User\HomeController@search");

Route::get('/cart/order',"OrderController@show");
Route::post('/pay',"OrderController@order");
Route::get('/admin/order',"OrderController@listOrder");

 Route::post('/sale',"OrderController@sale");