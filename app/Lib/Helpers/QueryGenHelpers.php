<?php namespace Lib\helpers;

use DB;
use BaseController;
use input;

class QueryGenHelpers implements QueryGenHelpersInterface {

 	function createQuery(){


		$getVals =Input::get();



		$query="";


		// if (isset($getVals['name']) && $getVals['name'] !=''){
		// 	$query.= $getVals['name']." ";
		// }
		// if (isset($getVals['subType']) && $getVals['subType'] !=''){
		// 	$query.=" st:".$getVals['subType']." ";
		// }
		// if (isset($getVals['text']) ){
		// 	$query.=" d:".$getVals['subType']." ";
		// }




		// if (isset($getVals['type']) ){
		// 	$query.="t:".implode('|',$getVals['type'])." ";
		// }		



		
		//echo 'query:'.$query.'<br>';
		$query.= $this->textTreat($getVals['name'])." ";
		$query.= $this->paramAdd('sty','subType','inline');
		$query.= $this->paramAdd('t','text','inline');
		$query.= $this->paramAdd('n','notes','inline');
		$query.= $this->paramAdd('th',array('thresholdFilter','threshold'),'op');
		$query.= $this->paramAdd('c',array('costFilter','cost'),'op');
		$query.= $this->paramAdd('s',array('strenghtFilter','strengh'),'op');
		$query.= $this->paramAdd('l',array('lifeFilter','life'),'op');
		$query.= $this->paramAdd('s',array('speedFilter','speed'),'op');
		$query.= $this->paramAdd('st',array('structureFilter','structure'),'op');
		$query.= $this->paramAdd('ty','type','array');
		$query.= $this->paramAdd('tr','trade','array');
		$query.= $this->paramAdd('e','edition','array');
		$query.= $this->paramAdd('r','rarity','array');
		$query= trim($query);	
		$queryBuild=array('q'=>$query);		
		
		return http_build_query($queryBuild); ;

 	}

 	function paramAdd($var,$val,$type){

 		$param="";
 		$getVals =Input::get();

		switch ($type) {


		    case "inline":
		        if (isset($getVals[$val]) && $getVals[$val] !=""){
					$param.=$var.":".$this->textTreat($getVals[$val])." ";
				}
		        break;
		    case "array":		        
		        if (isset($getVals[$val])){

		        	$param.=$var.":".implode('|',$getVals[$val])." ";
				
				}		        
		        break;
		    case "op":
		     	if (isset($getVals[$val[0]]) && isset($getVals[$val[1]]) && $getVals[$val[1]] !="" && is_numeric ($getVals[$val[1]])){					
		     		$param.=$var.':'.$getVals[$val[0]].$getVals[$val[1]]." ";
				} 
		        break;		        

		}
		return $param;
 	}





 	function textTreat($text){

 		$text=str_replace(" ","+",$text);
		return $text;
 	} 	

 }