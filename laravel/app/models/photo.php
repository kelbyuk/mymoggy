<?php
class Photo extends Eloquent {
	public function cat()
	{
		return $this->belongsTo('Cat');
	}
}