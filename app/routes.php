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

App::missing(function($exception)
{
    return Response::view('errors.404', array(), 404);
});

Route::get('/', function()
{
    return View::make('about');
});

Route::get('/blog', 'ArticleController@blogIndex');
Route::get('/tutorials', 'ArticleController@tutorialIndex');

Route::get('/projects', function()
{
    $projects = Project::with('images')
        ->orderBy('created_at', 'DESC')
        ->get();
    return View::make('projects', compact('projects'));
});
Route::get('/project/{id}/{slug?}', 'ProjectController@displayProject');

Route::get('/contact', function()
{
    return View::make('contact');
});

Route::get('/article/{id}/{slug?}', 'ArticleController@displayArticle');

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

Route::post('/contact', function(){
    $data = array(
        'from'  => Input::get('name'),
        'email' => Input::get('email'),
        'text'  => Input::get('text')
        );

    Mail::send('emails.contact', $data, function($message)
    {
        $message->to('email@jamie.sh', 'Jamie Shepherd')->subject('jamie.sh contact form');
    });

    return Redirect::to('contact')->with('message', '<strong>Thanks for your message!</strong> I aim to respond to all emails within 48 hours.');
});

/*
|--------------------------------------------------------------------------
| Administration Routes
|--------------------------------------------------------------------------
|
| Routes specific to the private administration section of the site
|
*/

Route::when('admin/*', 'auth');

Route::post('/admin/password', 'UserController@changePassword');

Route::get('/admin/password', function()
{
    return View::make('admin.password');
});

/*******************************************************************************
 * Blog CRUD
 ******************************************************************************/

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

// Update
Route::get('/admin/blog/edit/{id}', function($id)
{
    $article = Article::where('id', $id)
        ->first();
    return View::make('admin.blog.edit', compact('article'));
});

// Delete
Route::get('/admin/blog/delete/{id}', function($id)
{
    $article = Article::where('id', $id)
        ->first();
    return View::make('admin.blog.delete', compact('article'));
});
Route::get('/admin/blog/delete/{id}/confirm', function($id)
{
    Article::destroy($id);
    return Redirect::to('admin/blog/view')->with('message','Success! This article was removed from the database successfully.');
});

/*******************************************************************************
 * Tutorial CRUD
 ******************************************************************************/

Route::post('/admin/tutorial/create', 'ArticleController@addArticle');
Route::post('/admin/tutorial/edit/{id}', 'ArticleController@updateArticle');

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
    return View::make('admin.tutorial.edit', compact('article'));
});

// Delete
Route::get('/admin/tutorial/delete/{id}', function($id)
{
    $article = Article::where('id', $id)
        ->first();
    return View::make('admin.tutorial.delete', compact('article'));
});
Route::get('/admin/tutorial/delete/{id}/confirm', function($id)
{
    Article::destroy($id);
    return Redirect::to('admin/tutorial/view')->with('message','Success! This article was removed from the database successfully.');
});

/*******************************************************************************
 * Project CRUD
 ******************************************************************************/

Route::post('/admin/project/create', 'ProjectController@addProject');
Route::post('/admin/project/edit/{id}', 'ProjectController@updateProject');

// Create
Route::get('/admin/project/create', function()
{
    return View::make('admin.project.create');
});

// Read
Route::get('/admin/project/view', function()
{
    $projects = Project::orderBy('created_at', 'DESC')
        ->remember(120)
        ->get();
    return View::make('admin.project.view', compact('projects'));
});

// Update
Route::get('/admin/project/edit/{id}', function($id)
{
    $project = Project::where('id', $id)
        ->first();
    return View::make('admin.project.edit', compact('project'));
});

// Delete
Route::get('/admin/project/delete/{id}', function($id)
{
    $project = Project::where('id', $id)
        ->first();
    return View::make('admin.project.delete', compact('project'));
});
Route::get('/admin/project/delete/{id}/confirm', function($id)
{
    Project::destroy($id);
    $images = Image::where('id',$id)->get();
    // destroy images associated with project
    foreach($images as $image) {
        unlink('img/projects/'.$image->filename);
        Image::destroy($id);
    }
    return Redirect::to('admin/project/view')->with('message','Success! This project was removed from the database successfully.');
});

/*******************************************************************************
 * Media CRUD
 ******************************************************************************/

Route::post('/admin/media/create', 'MediaController@addImage');

// Create
Route::get('/admin/media/create', function()
{
    return View::make('admin.media.create');
});

// Read
Route::get('/admin/media/view', function()
{
    $images = Image::orderBy('created_at', 'DESC')
        ->get();
    return View::make('admin.media.view', compact('images'));
});

// Delete
Route::get('/admin/media/delete/{id}', function($id)
{
    $image = Image::where('id', $id)
        ->first();
    return View::make('admin.media.delete', compact('image'));
});
Route::get('/admin/media/delete/{id}/confirm', function($id)
{
    Image::destroy($id);
    return Redirect::to('admin/media/view')->with('message','Success! This image was removed from the database successfully.');
});
