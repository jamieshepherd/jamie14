<?php

class UserController extends BaseController {

    public function processLogin()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        $remember = (null !== Input::get('remember') ? true : false);

        if (Auth::attempt(array('email' => $email, 'password' => $password), $remember)) {
                return View::make('admin.index')->with('message', 'You have signed in successfully.');;
        } else {
                return View::make('login')->with('message', 'There was a problem logging in to your account.');
        }
    }

}
