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

Route::get('/', function () {
    return view('home');
});

Auth::routes();


Route::group(['namespace' => 'Admin','middleware'=> ['auth','admin'],'prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::get('/','DashboardController@index')->name('home');

    Route::group(['prefix' => 'category','as' => 'category.'], function (){
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('/create/', 'CategoryController@create')->name('create');
        Route::post('/create', 'CategoryController@store')->name('store');
        Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
        Route::post('/update/{id}', 'CategoryController@update')->name('update');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('delete');
    });

    Route::group(['prefix' => 'post', 'as'=>'post.'], function (){
        Route::get('/','PostController@index')->name('index');
        Route::get('/create','PostController@create')->name('create');
        Route::post('/create','PostController@store')->name('store');
        Route::get('/edit/{id}','PostController@edit')->name('edit');
        Route::post('/update/{id}','PostController@update')->name('update');
        Route::get('/delete/{id}','PostController@delete')->name('delete');
        Route::get('/soft/{id}','PostController@softdelete')->name('softdelete');
    });

    Route::group(['prefix' => 'writer', 'as' => 'writer.'], function (){
        Route::get('/', 'WriterController@index')->name('index');
        Route::get('/delete/{id}', 'WriterController@delete')->name('delete');
        Route::get('/change', 'WriterController@changeStatus')->name('change');
    });
});

Route::group(['namespace' => 'Writer', 'middleware' => ['auth', 'writer'], 'prefix' => 'post', 'as' => 'post.'], function (){
    Route::get('/', 'PostController@index')->name('index');
    Route::get('/create', 'PostController@create')->name('create');
    Route::post('/store', 'PostController@store')->name('store');
    Route::get('/edit/{id}', 'PostController@edit')->name('edit');
    Route::post('/update/{id}', 'PostController@update')->name('update');
    Route::get('/delete/{id}','PostController@delete')->name('delete');
    Route::get('/soft/{id}','PostController@softdelete')->name('softdelete');
});

