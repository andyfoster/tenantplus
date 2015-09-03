<?php

class Home_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{
		return View::make('home.index');
	}

	public function get_landlord_info()
	{
		return View::make('home.landlord_info');
	}

	public function get_tenant_info()
	{
		return View::make('home.tenant_info');
	}

}