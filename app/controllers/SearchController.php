<?php
class SearchController extends BaseController {


	//master
	protected $layout = 'layouts.master';

    public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}


    public function getIndex($id)
	{

		//return View::make('search');
		return $this->layout->content = View::make('search')->with('numero', $id);
	}	

    public function getInfos()
	{
		 $card = Card::all ();
		      return Response::json( $card);
	}

	public function postInfos()
	{
		echo 'Le nom est ' . Input::get('nom');
	}

}