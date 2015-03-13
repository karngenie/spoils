<?php
use Lib\Gestion\CardSearchGestion as CardSearchGestion;
use Lib\helpers\ExplodeSearchHelpers as ExplodeSearch;
class SearchController extends BaseController {


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
		
		$data =$this->CardSearch_gestion->initLists();


	//return View::make('projects.create', array('client_options' => $client_options));

		$testlg='cards.CardEdition';
		$card = Card::all ();

		//return View::make('search');
		return $this->layout->content = View::make('cards.search')->with('data', $data)->with('card', Response::json( $card))->with('testlg', $testlg);
	}	





    public function getInfos()
	{


		$testlg='cards.CardEdition';
		var_dump($this->ExplodeSearch_helpers->createDataSearch(Input::get('name')));

/*
		$searchParams=explode(" ",Input::get('name'))  ;


		$string = '1-350,9-390.99';

		$string =Input::get('name');
		$array = explode(' ',$string);
		$new_array = array();
		 
		array_walk($array,'walk', $new_array);
		 

		print_r($new_array);
*/

	
	

		$data =$this->CardSearch_gestion->initLists();

		//return View::make('projects.create', array('client_options' => $client_options));

		$card = Card::all ();
		Input::flash();
		//return View::make('search');
		return $this->layout->content = View::make('cards.search')->with('data', $data)->withInput(Input::all())->with('card', Response::json( $card))->with('testlg', $testlg);



		
		return Response::json( $card);
	}

	public function postInfos()
	{

		echo 'Le nom est ' . Input::get('nom');
	}






}