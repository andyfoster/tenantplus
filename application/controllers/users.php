<?php

class Users_Controller extends Base_Controller {

	public $restful = true;    

    public function get_index()
    {
        return View::make('users.index');
    }

	public function get_login()
    {
        return View::make('users/login');
    }

    public function post_login()
    {

        // get the email and password from the form
        $userdata = array(
            'username' => Input::get('email'),
            'password' => Input::get('password')            
        );

        // check them against the database
        if ( Auth::attempt($userdata) ) {
            if(Auth::user()->type == 'landlord') {
                return Redirect::to_route('landlords_home')->with('message', 'Logged In');
            } elseif (Auth::user()->type == 'tenant') {
                return Redirect::to_route('tenants_home')->with('message', 'Logged In');
            }
        } else {
            return Redirect::to_route('login')
                ->with('message', 'Email/Password incorrect')
                ->with_input();
        }     

    }

    public function get_signup()
    {
        return View::make('users/new');
    }     

    public function post_create()
    {
        //$validation = User::validate(Input::all());
        // this will only work if i put the following in the basemodel 
        // and have the models extend it

        $validation = Validator::make(Input::all(), User::$rules);

        if ( $validation->passes() ) {

            User::create(array(
                'first_name' => Input::get('first_name'),
                'last_name' => Input::get('last_name'),
                'email' => Input::get('email'),
                'type' => Input::get('type'),
                'phone_number' => Input::get('phone_number'),
                'password' => Hash::make(Input::get('password')),
            ));
            return Redirect::to_route('home')->with('message', 'You are signed up!');

        } else {
            return Redirect::to_route('signup')->with_errors($validation)->with_input();

        }
        

    } 

    public function get_logout()
    {
        if (Auth::check()) {
            Auth::logout();
            Session::flush(); //delete the session
            return Redirect::to_route('home')->with('message', 'Logged out');   
        } else {
            return Redirect::to_route('home');
        }
    }  



	public function get_show()
    {

    }    

	public function get_edit()
    {

    }    

	public function get_new()
    {

    }    

	public function put_update()
    {

    }    

	public function delete_destroy()
    {

    }

}