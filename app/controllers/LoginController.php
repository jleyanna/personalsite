<?php

class LoginController extends BaseController
{
    /*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function showLogin()
    {
        return View::make('login');
    }

    public function postLogin()
    {
        $rules = array(
            'username' => 'required',
            'password' => 'required'
        );

        if (Input::has('username'))
        {
            $username = Input::get('username');
        }
        $validator = Validator::make(Input::all(),$rules);

        if ($validator->fails())
        {
            return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
        }
        if (Auth::attempt(array('username'=>$username,'password'=>Input::get('password'))))
        {
            return Redirect::route('home');
        }
        return Redirect::route('home');
    }

    public function showLogout()
    {
        Auth::logout();
        return Redirect::route('home');
    }


}
