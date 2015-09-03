<?php

class Answer extends Eloquent 
{

	public function document()
	{
		return $this->belongs_to('Document');
	}

	public function user()
	{
		return $this->belongs_to('User');
	}

	public function fetch($id)
	{
		return $query->where('user_id', '=', $id);
	}


}