<?php

class Incident extends Eloquent {
	public function cat()
	{
		return $this->belongsTo('Cat');
	}
	public function sighting()
	{
		return $this->hasMany('Sighting');
	}
}