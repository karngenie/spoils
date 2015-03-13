<?php
use Lib\Gestion\CardSearchGestion as CardSearchGestion;
use Lib\helpers\QueryGenHelpers as QueryGen;

class ProcessController extends BaseController {


	//master
	protected $layout = 'layouts.master';
	protected $CardSearch_gestion;
	protected $QueryGen_helpers;

    public function __construct(CardSearchGestion $CardSearch_gestion, QueryGen $QueryGen_helpers)
	{
	
		parent::__construct();
		$this->CardSearch_gestion = $CardSearch_gestion;
		$this->QueryGen_helpers = $QueryGen_helpers;
	}


    public function getIndex()
	{


		echo $this->QueryGen_helpers->createQuery();


		return Redirect::to(LaravelLocalization::getCurrentLocale().'/result?'.$this->QueryGen_helpers->createQuery());
/*
		$cardtb =$this->CardSearch_gestion->resultSearch();

		$card = Card::all ();
*/

		return '';
	}	




   






}