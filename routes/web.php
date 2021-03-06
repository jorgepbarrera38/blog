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
Route::redirect('/', 'blog');
Route::get('contacto', 'BlogController@contact')->name('blog.contact');
Route::post('contacto', 'BlogController@contactstore')->name('blog.contact.store');
Route::get('quienes-somos', 'BlogController@aboutus')->name('blog.aboutus');
Route::get('blog/tag/{slug}', 'BlogController@tags')->name('blog.tag');
Route::resource('blog', 'BlogController');

Route::group(['prefix'=>'administration', 'middleware'=>'auth'], function(){
    Route::redirect('/', 'administration/dashboard');
    Route::view('dashboard', 'admin.dashboard')->name('dashboard');

    Route::put('posts/changestate/{slug}', 'PostController@changestate')->name('posts.changestate');
    Route::put('posts/selectgoutstanding/{slug}', 'PostController@selectgoutstanding')->name('posts.selectgoutstanding');
    Route::resource('posts', 'PostController');

});

Route::get('login', 'Auth\LoginController@ShowLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
