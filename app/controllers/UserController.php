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
    public function changePassword()
    {
        $input = Input::all();
        $rules = array(
            'password_old' => 'Required|Min:6',
            'password' => 'Required|Min:4|Confirmed',
            'password_confirmation' => 'Required|Min:4'
        );
        $validation = Validator::make($input,$rules);
        $errors = $validation->getMessageBag()->all();
        dd($errors);
        if($validation->passes()) {
            // validation was successful
            // now do the actual update to database
            // send message back to user giving succeess
            return View::make('admin.password')->with('message', 'This was successful');
        } else {
            // send a message saying it was unsuccessful
            return View::make('admin.password')->with(array(
                'message'=>'something went wrong',
                $errors
            ));
        }
    }

}
