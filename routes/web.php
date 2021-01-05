<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Login
Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function() {
    Route::get('login','AdminController@getLogin')->name('get-admin-Login');
    Route::post('login','AdminController@postLogin')->name('post-admin-Login');
    Route::get('logout','AdminController@getLogout')->name('get-admin-Logout');
});

Route::group(['middleware'=>'CheckAdminLogin', 'namespace' => 'admin'], function() {
    Route::get('/admin','AdminController@index');
    Route::get('/admin/dashboard','AdminController@show_dashboard');
});

// Website
//Route::get('/pages','HomeController@index');
Route::get('/pages/home','HomeController@Home')->name('pages.home');
Route::get('/pages/about','HomeController@About')->name('pages.about');
Route::get('/pages/shop','HomeController@Shop_All')->name('pages.shop');
Route::get('/pages/contact','HomeController@Contact')->name('pages.contact');
Route::get('/pages/single','HomeController@Single')->name('pages.single');
Route::get('/pages/checkout','HomeController@Checkout')->name('pages.checkout');
Route::get('/pages/404','HomeController@Err')->name('pages.404');
Route::get('/pages/shop_cate/{id}','HomeController@search_Category')->name('pages.search_category');
Route::get('/pages/shop_brand/{id}','HomeController@search_Brand')->name('pages.search_brand');
Route::get('/pages/single/{id}','HomeController@detail_Pro')->name('pages.detail_pro');


// Admin
Route::group(['middleware'=>'CheckAdminLogin','prefix'=>'admin/user','namespace' => 'admin'],function(){
    Route::get('/', 'UserController@index')->name('user.index');
    Route::get('/index','UserController@index')->name('user.index');
    Route::get('/create','UserController@getcreate')->name('user.create');
    Route::post('/create','UserController@postcreate')->name('user.postcreate');
    Route::get('edit/{id}','UserController@getedit')->name('user.getedit');
	Route::post('edit/{id}','UserController@postedit')->name('user.postedit');
    Route::get('delete/{id}','UserController@delete')->name('user.delete');
    Route::get('active/{id}','UserController@active')->name('user.active');
    Route::get('unactive/{id}','UserController@unactive')->name('user.unactive');
});

// Category
Route::resource('admin/category',admin\CategoryController::class);
Route::get('admin/category/delete/{id}', 'admin\CategoryController@delete')->name('category.delete');
Route::get('admin/category/prodictlist/{id}', 'admin\CategoryController@productlist')->name('category.productlist');
Route::get('admin/category/active/{id}', 'admin\CategoryController@active')->name('category.active');
Route::get('admin/category/unactive/{id}', 'admin\CategoryController@unactive')->name('category.unactive');

// Brand
Route::resource('admin/brand',admin\BrandController::class);
Route::get('admin/brand/delete/{id}', 'admin\BrandController@delete')->name('brand.delete');
Route::get('admin/brand/prodictlist/{id}', 'admin\BrandController@productlist')->name('brand.productlist');
Route::get('admin/brand/active/{id}', 'admin\BrandController@active')->name('brand.active');
Route::get('admin/brand/unactive/{id}', 'admin\BrandController@unactive')->name('brand.unactive');

// Product
Route::resource('admin/product',admin\ProductController::class);
Route::get('admin/product/delete/{id}', 'admin\ProductController@delete')->name('product.delete');
Route::get('admin/product/active/{id}', 'admin\ProductController@active')->name('product.active');
Route::get('admin/product/unactive/{id}', 'admin\ProductController@unactive')->name('product.unactive');






