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
    return View::make('about');
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

/*
|--------------------------------------------------------------------------
| Administration Routes
|--------------------------------------------------------------------------
|
| Routes specific to the private administration section of the site
|
*/

Route::post('/admin/password', 'UserController@changePassword');

Route::get('/admin', function()
{
    return View::make('admin.index');
});

Route::get('/admin/password', function()
{
    return View::make('admin.password');
});

/**
 * Blog CRUD
 */

Route::post('/admin/blog/create', 'ArticleController@addArticle');
Route::post('/admin/blog/edit/{id}', 'ArticleController@updateArticle');

// Create
Route::get('/admin/blog/create', function()
{
    return View::make('admin.blog.create');
});

// Read
Route::get('/admin/blog/view', function()
{
    $articles = Article::where('type','=','blog')
        ->orderBy('created_at', 'DESC')
        ->get();
    return View::make('admin.blog.view', compact('articles'));
});

//Update
Route::get('/admin/blog/edit/{id}', function($id)
{
    $article = Article::where('id', $id)
        ->first();
    return View::make('admin.blog.edit', compact('article'));
});

/**
 * Tutorial CRUD
 */

Route::post('/admin/tutorial/create', 'ArticleController@addArticle');
Route::post('/admin/tutorial/edit', 'ArticleController@updateArticle');

// Create
Route::get('/admin/tutorial/create', function()
{
    return View::make('admin.tutorial.create');
});

// Read
Route::get('/admin/tutorial/view', function()
{
    $articles = Article::where('type','=','tutorial')
        ->orderBy('created_at', 'DESC')
        ->get();
    return View::make('admin.tutorial.view', compact('articles'));
});

// Update
Route::get('/admin/tutorial/edit/{id}', function($id)
{
    $article = Article::where('id', $id)
        ->first();
    return View::make('admin.blog.edit', compact('article'));
});

/**
 * Tutorial CRUD
 */

Route::get('/admin/tutorial/{page}', function()
{
    return View::make('tutorials');
});

/**
 * Projects CRUD
 */

Route::post('/admin/projects/create', 'ProjectController@addProject');

Route::get('/admin/projects/create', function()
{
    return View::make('admin.projects.create');
});

Route::get('/admin/projects/{page}', function()
{
    return View::make('projects');
});
