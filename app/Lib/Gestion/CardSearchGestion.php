<?php namespace Lib\Gestion;

use DB;
use BaseController;

class CardSearchGestion implements CardSearchGestionInterface {


	public function initLists()
	{
		$typeCardOptions = DB::table('c_types')->orderBy('rank', 'asc')->lists('name','id');
		$tradeCardOptions = DB::table('c_trades')->orderBy('rank', 'asc')->lists('name','id');
		$editionCardOptions = DB::table('c_editions')->orderBy('rank', 'asc')->lists('name','id');
		$raretyCardOptions = DB::table('c_rarities')->orderBy('rank', 'asc')->lists('name','id');

		$data = compact('typeCardOptions', 'tradeCardOptions', 'editionCardOptions', 'raretyCardOptions');


		return $data;
	}

	

}