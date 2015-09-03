<?php
// really want to use Form as the model name but laravel alrady has Form
// // i could probably use namespaces to fix this but can't be bothered
//  going back to calling them documents for now


class Document extends Eloquent 
{
	public function fields()
	{
		return $this->has_many('Field')->order_by('position', 'asc');
	}

	public function answers()
	{
		return $this->has_many('Answer');
	}

}