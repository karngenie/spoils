<?php
use Lib\Gestion\CardSearchGestion as CardSearchGestion;
use Lib\helpers\ExplodeSearchHelpers as ExplodeSearch;
class CardController extends BaseController {


	//master
	protected $layout = 'layouts.master';
	protected $CardSearch_gestion;
	protected $ExplodeSearch_helpers;




    public function __construct(CardSearchGestion $CardSearch_gestion, ExplodeSearch $ExplodeSearch_helpers)
	{
	
		parent::__construct();
		$this->CardSearch_gestion = $CardSearch_gestion;
		$this->ExplodeSearch_helpers = $ExplodeSearch_helpers;
	}


    public function getIndex($cardNumber)
	{	
		

		$cardtb =$this->CardSearch_gestion->getCard($cardNumber);
		//var_dump($cardtb);




		return $this->layout->content = View::make('cards.card')->with('cardtb', $cardtb);;
	}	




   






}