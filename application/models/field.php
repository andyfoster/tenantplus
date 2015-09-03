<?php

class Field extends Eloquent 
{

	public function document()
	{
		return $this->belongs_to('Document');
	}

	public function answers()
	{
		return $this->has_many('Answer');
	}

}