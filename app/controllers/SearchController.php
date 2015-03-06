<?php
use Lib\Gestion\CardSearchGestion as CardSearchGestion;
class SearchController extends BaseController {


	//master
	protected $layout = 'layouts.master';
	protected $CardSearch_gestion;

    public function __construct(CardSearchGestion $CardSearch_gestion)
	{
	
		parent::__construct();
		$this->CardSearch_gestion = $CardSearch_gestion;
	}


    public function getIndex()
	{
		

	// queries the clients db table, orders by client_name and lists client_name and id

		$data =$this->CardSearch_gestion->initLists();
		

	//return View::make('projects.create', array('client_options' => $client_options));

		$testlg='cards.CardEdition';
		$card = Card::all ();

		//return View::make('search');
		return $this->layout->content = View::make('search')->with('data', $data)->with('card', Response::json( $card))->with('testlg', $testlg);
	}	

    public function getInfos()
	{
		$data =$this->CardSearch_gestion->initLists();

		//return View::make('projects.create', array('client_options' => $client_options));

		$card = Card::all ();
		Input::flash();
		//return View::make('search');
		return $this->layout->content = View::make('search')->with('data', $data)->withInput(Input::all())->with('card', Response::json( $card));



		
		return Response::json( $card);
	}

	public function postInfos()
	{

		echo 'Le nom est ' . Input::get('nom');
	}

}