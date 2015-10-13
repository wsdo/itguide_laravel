<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','indexController@index');
Route::get('/content','Home\ContentController@index');

// Route::get('/list','Admin\ListController@list');
Route::post('/add','Home\ContentController@add');
// Route::get('/',function(){
// 	return view('nav');
// });
// Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('test', 'TestController@index');

Route::get('/admin/index', function () {
    return view('/admin/index');
});

Route::get('/admin/edit', function () {
    return view('/admin/article/edit');
});
Route::get('/admin/post-new', function () {
    return view('/admin/article/post-new');
});

Route::get('/', function () {
    return view('/home/index');
});
Route::get('/page','Home\Article\PageController@page_list');

/*Route::get('/admin/edit-tags', function () {
    return view('/admin/article/edit-tags');
});*/

// Route::get('/admin/edit','Admin\Article\ListController@listacticle');
Route::get('/admin/article/list','Admin\Article\ListController@listacticle');
Route::get('/admin/article/categorytable','Admin\Article\ListController@categoryTable');
Route::get('/admin/edit-tags','Admin\Article\ListController@category');
Route::post('/admin/article/add','Admin\Article\ListController@add');
Route::post('/admin/article/article_add','Admin\Article\ListController@article_add');

Route::resource('photo', 'PhotoController');

// 隐式路由
Route::controller('todo','TodoController');