<?php

class AdminController extends BaseController
{

    public function showHome()
    {
        return View::make('admin_home');
    }

    public function showAddUser()
    {
        $roles = Role::all()->toArray();
        $rolesnew[] = ' ';
        foreach ($roles as $role)
        {
            $rolesnew[$role['id']] = $role['name'];
        }
        return View::make('admin_adduser',array('roles'=>$rolesnew));
    }

    public function postAddUser()
    {
        $rules = array(
            'username' => 'required|unique:users',
            'password' => 'required|confirmed',
            'email' => 'required|email',
        );

        $validator = Validator::make(Input::all(),$rules);

        if ($validator->fails())
        {
            return Redirect::route('adminuser')->withErrors($validator)->withInput(Input::except('password'));
        }
        $user = new User;
        $user->username = Input::get('username');
        $user->firstname = Input::get('firstname');
        $user->lastname = Input::get('lastname');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        $user->roles()->attach(Role::find(Input::get('role')));
    }

    public function showManageUser()
    {
        $users = User::all();
        return View::make('admin_manageuser',array('users'=>$users));
    }
}
