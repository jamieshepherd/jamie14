<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('index');
});

Route::get('/blog', function()
{
    return View::make('blog');
});

Route::get('/tutorials', function()
{
    return View::make('tutorials');
});

Route::get('/projects', function()
{
    return View::make('projects');
});

Route::get('/contact', function()
{
    return View::make('contact');
});

Route::get('/article', function()
{
    return View::make('article');
});

/* Administration */

Route::get('/login', function()
{
    return View::make('login');
});

Route::post('/login', 'UserController@processLogin');

Route::get('/logout', function()
{
    Auth::logout();
    return View::make('login')->with('message', 'You have successfully logged out.');;
});

Route::get('/admin', function()
{
    return View::make('admin.index');
});

Route::get('/admin/blog/create', function()
{
    return View::make('admin.blog.create');
});
Route::post('/admin/blog/create', 'ArticleController@addArticle');

Route::get('/admin/blog/{page}', function()
{
    return View::make('blog');
});


Route::get('/admin/tutorials/{page}', function()
{
    return View::make('tutorials');
});

Route::get('/admin/projects/{page}', function()
{
    return View::make('projects');
});
