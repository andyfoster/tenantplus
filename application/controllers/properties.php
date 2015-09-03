<?php

class Properties_Controller extends Base_Controller {

	public $restful = true;    

    public function get_index()
    {	
       	return View::make('properties.index');
    }
}