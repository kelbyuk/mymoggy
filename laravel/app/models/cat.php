<?php

class Cat extends Eloquent {

	protected $fillable = array('user_id','name','breed','coat','sex','altered','collar','chipserial','dob','colour','markings','personality');

	public function incidents()
	{
		return $this->hasMany('Incident');
	}
	public function sightings()
	{
		return $this->hasMany('Sighting');
	}
	public function posts()
	{
		return $this->hasMany('Post');
	}
	public function photos()
	{
		return $this->hasMany('Photo');
	}
	public function user()
	{
		return $this->belongsTo('User');
	}
	
}