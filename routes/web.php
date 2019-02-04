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
use \Illuminate\Filesystem\Filesystem;

app(Filesystem::class);

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test');
Route::get('/json', 'JsonController@base');
Route::get('/post', 'PostController@view');
Route::post('/addComment', 'PostController@store');
Route::get('/servCont/{id}', 'HomeController@servCont');
Route::get('fileSys', 'HomeController@fileSys');
Route::get('/repos', 'HomeController@repos');
//Route::get('/post/create', 'PostController@createComment');

Route::resource('books', 'BooksController');
Route::resource('articles', 'ArticlesController');
Route::post('articles/preview', 'ArticlesController@preview');
Route::get('articles/preview/save', 'ArticlesController@save');