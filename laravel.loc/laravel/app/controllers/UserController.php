<?php
use Illuminate\Support\MessageBag;

class UserController extends BaseController {

    public function loginAction() {

        if(Input::server("REQUEST_METHOD") == "POST") {
            $credentials = array(
                "username" => Input::get("username"),
                "password" => Input::get("password")
            );

            if(Auth::attempt($credentials)) {
                return Redirect::route("user/profile");
            }
            else {
                return Redirect::route('user/login')
                    ->withErrors(array('password' => 'Invalid username or password'))
                    ->withInput(Input::except('password'));
            }
        }

        return View::make("users.login");
    }

    public function registerAction() {
        if(Input::server('REQUEST_METHOD') == 'POST') {
            $validator = Validator::make(Input::all(), array(
                'email' => array('required','email'),
                'username' => array('required','min:5','unique:user'),
                'password' => 'required'
            ));

            if($validator -> passes())
            {
                $user = new User;

                $user->email = Input::get('email');
                $user->username = Input::get('username');
                $user->password = Hash::make(Input::get('password'));

                if($user->save()) {
                    return Redirect::route('user/login')
                    ->with(array(
                        'success' => 'You are successfully registered. Now you can login'
                    ));
                }
                else {
                    return Redirect::route('user/register')
                        ->with(array(
                            'error' => 'Sorry, registration failed'
                        ));
                }
            }
            else
            {
                return Redirect::to('register')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            }

            return Redirect::to('user/register')
                ->withInput($data);
        }

        return View::make('users.register');
    }

    public function profileAction() {
        return View::make("users.profile");
    }

    public function logoutAction() {
        Auth::logout();
        return Redirect::route('user/login');
    }
}