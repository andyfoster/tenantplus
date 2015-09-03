<?php

class Landlords_Controller extends Base_Controller {

	public $restful = true;    

    public function get_index()
    {	
       	return View::make('landlords.index');
    }

    public function get_tenants()
    {
    	return View::make('landlords.tenants');
    }
}