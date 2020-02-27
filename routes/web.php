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

/*
Route::get('/', function () {
    return view('welcome');
});
*/











Route::get('/project', 'ProjectController@index');
Route::get('/project/create', 'ProjectController@create');
Route::POST('/project', 'ProjectController@store');
Route::get('/project/{id}', 'ProjectController@show');
Route::get('/project/{id}/edit', 'ProjectController@edit');
Route::put('/project/{id}', 'ProjectController@update');
Route::delete('/project/{id}', 'ProjectController@destroy');


//Route::resource('/project', 'ProjectController');






/*Calculator*/
Route::resource('/', 'HomeController');



/*Project App*/



Route::get('/homes', [
	'uses' => 'HomesController@index',
	'as' => 'homes'
]);

Route::get('/post/create', [
	'uses' => 'PostsController@create', 
	'as' => 'post.create'
]);


Route::post('/post/store', [
	'uses' => 'PostsController@store',
	'as' => 'post.store'
]);


Route::get('/category/create', [
	'uses' => 'CategoriesController@create',
	'as' => 'category.create'
]);

Route::get('/categories', [
	'uses' => 'CategoriesController@index',
	'as' => 'categories'
]);


Route::get('/category/edit/{id}', [
	'uses' => 'CategoriesController@edit',
	'as' => 'category.edit'

]);

Route::get('/category/delete/{id}', [
	'uses' => 'CategoriesController@destroy',
	'as' => 'category.delete'
]);


Route::post('/category/store', [
	'uses' => 'CategoriesController@store',
	'as' => 'category.store'
]);


Route::post('category/update/{id}', [
	'uses' => 'CategoriesController@update',
	'as' => 'category.update'
]);






