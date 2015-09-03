<?php

class Documents_Controller extends Base_Controller 
{

	public $restful = true;    

    public function get_index()
    {
    	return View::make('documents.index')->with('documents', Document::all());
    }

    public function get_show($id)
    {
    	return View::make('documents.show')
    		->with('document', Document::find($id)
    		->with('user_id', Auth::user()->id))
    		->with('answers', Answer::where_user_id(1));
    }
}