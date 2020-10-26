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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('blog', 'HomeController@index')->name('home')->middleware('verified');


Route::group(['middleware' => ['auth', 'admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    //Korisnici
    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@register_edit');
    Route::put('/role-register-update/{id}', 'Admin\DashboardController@register_update');
    Route::get('/role-destroy/{id}', 'Admin\DashboardController@register_destroy');
    Route::delete('/role-delete/{id}', 'Admin\DashboardController@register_delete');
    //Postovi
    Route::resource('posts', 'AdminPostsController');
    Route::get('/post-edit/{id}', 'AdminPostsController@edit');
    Route::put('/post-update/{id}', 'AdminPostsController@update');
    Route::delete('/post-destroy/{id}', 'AdminPostsController@destroy');
    Route::get('/post-destroy-confirm/{id}', 'AdminPostsController@postDestroyConfirm');
    
    Route::get('/role-register', 'Admin\DashboardController@registered');
    //CKEditor upload
    Route::post('ckeditor/image_upload', 'AdminPostsController@upload')->name('upload');
  
});
    Auth::routes(['verify' => true]);
    Route::get('blog', 'HomeController@index')->name('home')->middleware('verified');
    Route::resource('userPost', 'HomeController'); 
    Route::get('/blog', 'HomeController@index');   

    //pages
    Route::get('/onama', 'PagesController@about');
    Route::get('/kontakt', 'PagesController@kontakt');

    Route::get('/user-acc/{id}', 'UserController@user_edit');
    Route::put('/user-acc-update/{id}', 'UserController@user_update');


