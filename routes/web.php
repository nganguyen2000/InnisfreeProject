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