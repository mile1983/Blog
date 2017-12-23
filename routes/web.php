<?php
use App\Http\Controllers\PostsContoller;

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

Route::get('/posts',['as' =>'posts', 'uses'=> 'PostsContoller@index']);
Route::get('/posts/create',['as' =>'create-post', 'uses'=> 'PostsContoller@create']);
Route::post('/posts',['as' =>'store-post', 'uses'=> 'PostsContoller@store']);
Route::post('/posts/{postId}/comments',['as' =>'comments-post', 'uses'=> 'CommentsController@store']);
Route::get('/post/{id}',['as' =>'single-post', 'uses'=> 'PostsContoller@show' ]);
