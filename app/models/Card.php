<?php
class Card extends Eloquent {
    
    protected $table = 'cards';
    public $timestamps = true;


	public function cards_types() 
	{
		return $this->belongsTo('Card_type');
	}

}