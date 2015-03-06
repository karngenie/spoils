<?php

class Card_type extends Eloquent {

    protected $table = 'cards_types';
	public $timestamps = true;
	
	public function cards()
	{
		return $this->hasMany('Card');
	}

}