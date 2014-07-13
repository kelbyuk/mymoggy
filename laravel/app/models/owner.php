<?php

class Owner extends Eloquent {
	public function cats()
	{
		return $this->hasMany('Cat');
	}
}