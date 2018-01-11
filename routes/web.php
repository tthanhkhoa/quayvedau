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
    return view('fe/index');
})->name('home');

Route::match(['get', 'post'], '/login', 'Auth\LoginController@handleLogin')->name('login');
Route::middleware(['admin'])->group(function () {
    Route::get('/list-blog', function () {
        return view('fe/list-blog');
    })->name('list-blog');

    Route::get('/single-blog', function () {
        return view('fe/single-blog');
    })->name('single-blog');
});

Route::match(['get', 'post'], '/add-blog', 'BlogController@addPostBlog')->name('add-blog');

//Route::get('/add-blog', function () {
//    return view('admin/add-post-blog');
//})->name('add-blog');

