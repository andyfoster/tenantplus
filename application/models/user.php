<?php

class User extends Eloquent 
{
	public static $rules = array(
        'first_name' => 'required|alpha',
        'last_name' => 'required|alpha',
		'email'	=>	'required|unique:users|email',
        'type' => 'required|in:tenant,landlord',
        'phone_number' => 'required|numeric',
        'password' => 'required|confirmed|min:4',
        'password_confirmation' => 'required'
	);

	public function answers()
	{
		return $this->has_many('Answer');
	}
}