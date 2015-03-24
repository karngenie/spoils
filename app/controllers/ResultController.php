<?php
use Lib\Gestion\CardSearchGestion as CardSearchGestion;
use Lib\helpers\ExplodeSearchHelpers as ExplodeSearch;
class ResultController extends BaseController {


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


    public function getIndex()
	{		

		$q =Input::get("q");
		



		$cardtb =$this->CardSearch_gestion->resultSearch($this->ExplodeSearch_helpers->createDataSearch($q));
		//$cardtb =$this->CardSearch_gestion->resultSearch();
		

		//$cardtb = Card::all ();
		$fragLg=LaravelLocalization::getCurrentLocale();



		if (sizeof($cardtb)==1){			 
			return Redirect::to(LaravelLocalization::getCurrentLocale().'/'.'card/'.$cardtb[0]->number);
		}


		return $this->layout->content = View::make('cards.result')->with('cardtb', $cardtb);
	}	




   






}