<?php

class Sighting extends Eloquent {
	public function cat()
	{
		return $this->belongsTo('Cat', 'cat_id');
	}
}