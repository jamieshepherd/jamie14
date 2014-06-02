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

Route::post('/login', function()
{
    $email = Input::get('email');
    $password = Input::get('password');
    if (Auth::attempt(array('email' => $email, 'password' => $password))) {
        //return Redirect::to('projects')->with('message', 'You are now logged in!');
        echo "Success";
    } else {
        echo "Failure";
    }
});
