<?php

class UserController extends Controller
{
    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    public function showManage() {
        $user = Auth::user();
        $username = $user->username;
        $email = $user->email;
        $firstname = $user->firstname;
        $lastname = $user->lastname;
        return View::make('usermanage',array('email'=>$email,'firstname'=>$firstname,'lastname'=>$lastname,'username'=>$username));
    }

    public function postManage() {
        $user = Auth::user();
        if (Input::has('email'))
        {
            $email = Input::get('email');
            $user->email = $email;
        }
        if (Input::has('password') && Input::has('confirmpassword'))
        {
            $password = Input::get('password');
            $confirmpassword = Input::get('confirmpassword');
            if ($password === $confirmpassword)
            {
                $user->password = Hash::make($confirmpassword);
            }
        }
        $user->save();
        return Redirect::route('manageuser');
    }

    public function showUserManage($id) {
        $user = User::find($id);
    }

}
