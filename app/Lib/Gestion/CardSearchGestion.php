<?php namespace Lib\Gestion;

use DB;
use BaseController;
use Input;
use LaravelLocalization;
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






	public function resultSearch($q)
	{

		var_dump($q);
		$g=isset($q['g']) ? $q['g'] : "";
		$sty=isset($q['sty']) ? $q['sty'] : "";
		$t=isset($q['t']) ? $q['t'] : "";
		$n=isset($q['n']) ? $q['n'] : "";
		$th=isset($q['th']) ? $q['th'] : "";
		$c=isset($q['c']) ? $q['c'] : "";
		$s=isset($q['s']) ? $q['s'] : "";
		$l=isset($q['l']) ? $q['l'] : "";
		$s=isset($q['s']) ? $q['s'] : "";
		$st=isset($q['st']) ? $q['st'] : "";
		$ty=isset($q['ty']) ? $q['ty'] : "";
		$tr=isset($q['tr']) ? $q['tr'] : "";
		$e=isset($q['e']) ? $q['e'] : "";
		$r=isset($q['r']) ? $q['r'] : "";


			echo (LaravelLocalization::getCurrentLocale()).'<br>';

		$cardtb = DB::select( DB::raw("SELECT DISTINCT cards.*,name ,subType,text,notes,visual
		FROM cards 
		INNER JOIN c_cards_editions_rarities AS c_e_r ON cards.Id=c_e_r.cardId
		INNER JOIN c_cards_descs ON cards.Id=c_cards_descs.cardId
		WHERE 
		(
			name LIKE :name 
			OR 
			number LIKE :number

		)
		AND subType LIKE :subType
		
		AND text LIKE :text
		AND notes LIKE :notes	
		".$this->genFilterOp($th,'threshold')."
		".$this->genFilterOp($c,'cost')."
		".$this->genFilterOp($s,'strenght')."
		".$this->genFilterOp($l,'life')."
		".$this->genFilterOp($s,'speed')."
		".$this->genFilterOp($st,'structure')."
		".$this->genFilterIn($ty,"type")."
		".$this->genFilterIn($tr,"trade")."
		".$this->genFilterIn($e,"editionId")."
		".$this->genFilterIn($r,"rarityId")."
		AND lang = :lang
		"
		), 
			array(
			'name' => '%'.$g.'%',
			'subType' => '%'.$sty.'%',
			'number' => '%'.$g.'%',
			'text' => '%'.$t.'%',
			'notes' => '%'.$n.'%',
			'lang' => LaravelLocalization::getCurrentLocale(),
		));		






/*
		echo 'g:'.$g.'<br>';
		echo 'sty:'.$sty.'<br>';
		echo 't:'.$t.'<br>';
		echo 'n:'.$n.'<br>';
		echo 'th:'.$th.'<br>';
*/

	




		return $cardtb;
















		// $subType=isset($getVals['name']) ? $getVals['name'] : "";
		// $number=isset($getVals['number']) ? $getVals['number'] : "";
		// $text=isset($getVals['text']) ? $getVals['text'] : "";
		// $notes=isset($getVals['notes']) ? $getVals['notes'] : "";

		// $thresholdFilter=isset($getVals['thresholdFilter']) ? $getVals['thresholdFilter'] : "=";
		// $threshold=isset($getVals['threshold']) ? $getVals['threshold'] : "";

		// $costFilter=isset($getVals['costFilter']) ? $getVals['costFilter'] : "";
		// $cost=isset($getVals['cost']) ? $getVals['cost'] : "";

		// $strenghtFilter=isset($getVals['strenghtFilter']) ? $getVals['strenghtFilter'] : "";
		// $strenght=isset($getVals['strenght']) ? $getVals['strenght'] : "";

		// $lifeFilter=isset($getVals['lifeFilter']) ? $getVals['lifeFilter'] : "";
		// $life=isset($getVals['life']) ? $getVals['life'] : "";

		// $speedFilter=isset($getVals['speedFilter']) ? $getVals['speedFilter'] : "";
		// $speed=isset($getVals['speed']) ? $getVals['speed'] : "";

		// $structureFilter=isset($getVals['structureFilter']) ? $getVals['structureFilter'] : "";
		// $structure=isset($getVals['structure']) ? $getVals['structure'] : "";

		// $type=isset($getVals['type']) ? $getVals['type'] : "";
		// $trade=isset($getVals['trade']) ? $getVals['trade'] : "";
		// $edition=isset($getVals['edition']) ? $getVals['edition'] : "";
		// $rarity=isset($getVals['rarity']) ? $getVals['rarity'] : "";





		// var_dump($type);


		// foreach($type as $elmt)
		// {
		// 	//'is_int'
		//     echo $elmt . ','; // affichera $prenoms[0], $prenoms[1] etc.
		// }
				
		// $thresholdFilter=$this->genFilterOp($thresholdFilter);
		// $thresholdField='threshold';
		// if ($threshold=='')
		// {
		// 	$threshold=0;
		// 	$thresholdField=0;
		// 	$thresholdFilter="=";
		// }

		// $costFilter=$this->genFilterOp($costFilter);
		// $costField='cost';
		// if ($cost=='')
		// {
		// 	$cost=0;
		// 	$costField=0;
		// 	$costFilter="=";
		// }

		// $strenghtFilter=$this->genFilterOp($strenghtFilter);
		// $strenghtField='strenght';
		// if ($strenght=='')
		// {
		// 	$strenght=0;
		// 	$strenghtField=0;
		// 	$strenghtFilter="=";
		// }	

		// $lifeFilter=$this->genFilterOp($lifeFilter);
		// $lifeField='life';
		// if ($life=='')
		// {
		// 	$life=0;
		// 	$lifeField=0;
		// 	$lifeFilter="=";
		// }	

		// $speedFilter=$this->genFilterOp($speedFilter);
		// $speedField='speed';
		// if ($speed=='')
		// {
		// 	$speed=0;
		// 	$speedField=0;
		// 	$speedFilter="=";
		// }

		// $structureFilter=$this->genFilterOp($structureFilter);
		// $structureField='structure';
		// if ($structure=='')
		// {
		// 	$structure=0;
		// 	$structureField=0;
		// 	$structureFilter="=";
		// }


		// $cardtb = DB::select( DB::raw("SELECT * FROM cards 	
		// WHERE name LIKE :name 
		// AND subType LIKE :subType
		// AND number LIKE :number
		// AND text LIKE :text
		// AND notes LIKE :notes
		// AND ".$thresholdField." ".$thresholdFilter." :threshold
		// AND ".$costField." ".$costFilter." :cost
		// AND ".$strenghtField." ".$strenghtFilter." :strenght
		// AND ".$lifeField." ".$lifeFilter." :life
		// AND ".$speedField." ".$speedFilter." :speed
		// AND ".$structureField." ".$structureFilter." :structure
		// "
		// ), 
		// 	array(
		// 	'name' => '%'.$name.'%',
		// 	'subType' => '%'.$subType.'%',
		// 	'number' => '%'.$number.'%',
		// 	'text' => '%'.$text.'%',
		// 	'notes' => '%'.$notes.'%',
		// 	'threshold' => $threshold,
		// 	'cost' => $cost,
		// 	'strenght' => $strenght,
		// 	'life' => $life,
		// 	'speed' => $speed,
		// 	'structure' => $structure,


		// ));		

		// return $cardtb;

	
	}	



	// Permet de générer le bon opérateur de comparaison
	function genFilterOp($valFilter,$field){
		$field='AND '.$field;
		$filterOp;
		$filterValue;
		$checkFilter=str_replace(range(0,9),'',$valFilter); // récupére l'opérateur
		$checkValue=preg_replace('/[^0-9]/', '', $valFilter); // récupére la valeur

		// Vérifier que c'est bien un opérateur(todo faire une liste)
		if ($checkFilter != "=" && $checkFilter != "<" && $checkFilter != ">"  ){
			$filterOp ="=";
		}
		else{
			$filterOp=$checkFilter;
		}


		if (!is_numeric($checkValue)){ // si on n'a pas d'entier la requete est considéré comme vide
			$field='';
			$checkValue='';
			$filterOp='';
		}
		return $field . $filterOp . $checkValue;
	}

	// Permet de générer les in sql
	function genFilterIn($valFilter,$field){

		$field='AND '.$field.' IN(';
		$endQuery=')';
		$filter="";
		// test que c'est bien des entiers
		$checkValue=str_replace("|","",$valFilter); 
		if (!is_numeric($checkValue)){
			$field="";
			$endQuery="";
		}
		else{
			$filter=str_replace("|",",",$valFilter); 
		}

		return $field.$filter.$endQuery;
	
	}
	

}