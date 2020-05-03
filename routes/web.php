<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Site\SiteController@index')->name('index');
Route::get('/post', 'Site\SiteController@post')->name('post');
Route::get('/posts/{date}', 'Site\SiteController@posts')->name('posts');
Route::get('/post/{id}', 'Site\SiteController@post')->name('post');
Route::get('/category/{slug}', 'Site\SiteController@category')->name('category');

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', 'Backend\DashboardController@index')->name('home');

 /**
     * CATEGORIES Route
     */
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', 'Backend\CategoryController@index')->name('manage');
        Route::get('/add', 'Backend\CategoryController@create')->name('create');
        Route::post('/store', 'Backend\CategoryController@store')->name('store');
        Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('edit');
        Route::put('/update', 'Backend\CategoryController@update')->name('update');
        Route::get('/delete/{id}', 'Backend\CategoryController@delete')->name('delete');
        Route::get('/update-status/{id}/{status}', 'Backend\CategoryController@updateStatus')->name('update.status');
    });

    /**
     * POST Route
     */

    Route::prefix('posts')->name('posts.')->group(function (){
        Route::get('/', 'Backend\PostController@index')->name('index');
        Route::get('/create', 'Backend\PostController@create')->name('create');
        Route::post('/store', 'Backend\PostController@store')->name('store');
        Route::get('/edit/{id}', 'Backend\PostController@edit')->name('edit');
        Route::put('/update/{id}', 'Backend\PostController@update')->name('update');
        Route::delete('/delete/{id}', 'Backend\PostController@destroy')->name('delete');
    });

    /**
     * POST Route
     */

    Route::prefix('contact')->name('contacts.')->group(function (){
        Route::get('/', 'Backend\ContactController@index')->name('index');
        Route::get('/', 'Backend\ContactController@index')->name('manage');
        Route::get('/create', 'Backend\ContactController@create')->name('create');
        Route::post('/store', 'Backend\ContactController@store')->name('store');
        Route::get('/edit/{id}', 'Backend\ContactController@edit')->name('edit');
        Route::put('/update/{id}', 'Backend\ContactController@update')->name('update');
        Route::delete('/delete/{id}', 'Backend\ContactController@destroy')->name('delete');
    });

});




Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

