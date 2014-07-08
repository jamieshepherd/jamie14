<?php

class UserController extends BaseController {

    public function processLogin()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        $remember = (null !== Input::get('remember') ? true : false);

        if (Auth::attempt(array('email' => $email, 'password' => $password), $remember)) {
                return View::make('about')->with('message', 'You have signed in successfully.');;
        } else {
                return View::make('login')->with('message', 'There was a problem logging in to your account.');
        }
    }
    public function changePassword()
    {
        $input = Input::all();
        $rules = array(
            'password_old' => 'Required|Min:4',
            'password' => 'Required|Min:4|Confirmed',
            'password_confirmation' => 'Required|Min:4'
        );
        $validation = Validator::make($input,$rules);

        if($validation->passes()) {
            // The form was correct, now let's see if we entered old password correct
            $credentials = array('email' => Auth::user()->email, 'password' => $input['password_old']);
            if(Auth::validate($credentials))
            {
                // do the update
                DB::table('users')
                    ->where('id', Auth::id())
                    ->update(array('password' => Hash::make($input['password'])));
                // send a message
                return View::make('admin.password')
                    ->with('message',
                        'Changing your password was <strong>successful</strong>.');
            } else {
                return View::make('admin.password')
                    ->with('message',
                        'Sorry, the <strong>old password</strong> you entered was incorrect.');
            }
        } else {
            // Send a message saying it was unsuccessful
            return View::make('admin.password')
                ->with('message',
                    'Changing your password was <strong>unsuccessful</strong>. Please check your submission and try again.')
                ->withErrors($validation);
        }
    }

}
