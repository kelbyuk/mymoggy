<?php

class Post extends Eloquent {
	public function cat()
	{
		return $this->belongsTo('Cat');
	}
}