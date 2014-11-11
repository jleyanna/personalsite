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

Route::get('/', array('as'=>'home', 'uses' => 'HomeController@showWelcome'));
Route::get('/resume', array('as'=>'resume', 'uses' => 'ResumeController@showResume'));
Route::get('/blog', array('as'=>'blog', 'uses' => 'BlogController@showBlog'));
Route::get('/login', array('as'=>'login', 'uses' => 'LoginController@showLogin'));
Route::post('/login', array('as' => 'postlogin', 'uses' => 'LoginController@postLogin'));
Route::get('/manage', array('as' => 'manageuser', 'uses' => 'UserController@showManage'));
Route::post('/manage', array('as' => 'manageuser', 'uses' => 'UserController@postManage'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'LoginController@showLogout'));
Route::get('/admin', array('as' => 'admin', 'uses' => 'AdminController@showHome'));
Route::get('/admin/user', array('as' => 'adminuser', 'uses' => 'AdminController@showAddUser'));
Route::post('/admin/user', array('as' => 'adminuserpost', 'uses' => 'AdminController@postAddUser'));
Route::get('/admin/manageuser',array('as'=>'adminusermanage', 'uses' => 'AdminController@showManageUser'));
Route::get('/user/{id}/edit',array('as'=>'adminmanagesingleuser',function($id) {
    $usercontroller = new UserController();
    return $usercontroller->showUserManage($id);
}));