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

Route::get('/blog', 'ArticleController@blogIndex');
Route::get('/tutorials', 'ArticleController@tutorialIndex');

Route::get('/projects', function()
{
    $projects = Project::with('images')->get();
    return View::make('projects', compact('projects'));
});

Route::get('/contact', function()
{
    return View::make('contact');
});

Route::get('/article', function()
{
    return View::make('article');
});

Route::get('/article/{id}', 'ArticleController@displayArticle');

Route::get('/project', function()
{
    return View::make('project');
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

/* Admin > Blog */
Route::get('/admin/blog/view', function()
{
    $articles = Article::where('type','=','blog')
        ->orderBy('created_at', 'DESC')
        ->get();
    return View::make('admin.blog.view', compact('articles'));
});
Route::get('/admin/blog/create', function()
{
    return View::make('admin.blog.create');
});

Route::get('/admin/blog/edit/{id}', function($id)
{
    $article = Article::where('id', $id)
        ->first();
    return View::make('admin.blog.edit', compact('article'));
});
Route::get('/admin/tutorial/view', function()
{
    $articles = Article::where('type','=','tutorial')
        ->orderBy('created_at', 'DESC')
        ->get();
    return View::make('admin.tutorial.view', compact('articles'));
});
Route::get('/admin/tutorial/edit/{id}', function($id)
{
    $article = Article::where('id', $id)
        ->first();
    return View::make('admin.blog.edit', compact('article'));
});
Route::post('/admin/{type}/edit/{id}', 'ArticleController@updateArticle');

Route::post('/admin/blog/create', 'ArticleController@addArticle');


Route::get('/admin/blog/{page}', function()
{
    return View::make('blog');
});

/* Admin > Tutorials */
Route::get('/admin/tutorial/create', function()
{
    return View::make('admin.tutorial.create');
});

Route::post('/admin/tutorial/create', 'ArticleController@addArticle');

Route::get('/admin/tutorial/{page}', function()
{
    return View::make('tutorials');
});

/* Admin > Projects */
Route::get('/admin/projects/create', function()
{
    return View::make('admin.projects.create');
});
Route::get('/admin/projects/{page}', function()
{
    return View::make('projects');
});
Route::post('/admin/projects/create', 'ProjectController@addProject');

Route::get('/admin/password', function()
{
    return View::make('admin.password');
});
Route::post('/admin/password', 'UserController@changePassword');
