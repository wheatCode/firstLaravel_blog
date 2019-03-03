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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/posts/admin', 'PostController@admin');
Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');
Route::put('/posts/{id}', 'PostController@update');
Route::delete('/posts/{id}', 'PostController@destory');
Route::get('/posts/{id}', 'PostController@show');

Route::get('/posts/{id}/edit', 'PostController@edit');
Route::get('/posts', 'PostController@index');

// Route::get('/posts', function () {
//     $posts = [1, 2, 3, 4, 5];

//     return view('posts.list', ['posts' => $posts]);
// });

// Route::get('/posts/{id}', function ($id) {
//     return view('posts.show');
// });
