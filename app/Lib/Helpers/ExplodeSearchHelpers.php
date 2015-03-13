<?php namespace Lib\helpers;

use DB;
use BaseController;

class ExplodeSearchHelpers implements ExplodeSearchHelpersInterface {





	public function test()
	{
		return 'walk';
	}

	//http://stackoverflow.com/questions/14133780/explode-a-string-to-associative-array
	public function createDataSearch($valGet)		
	{

		$string = $valGet;
		$partial = explode(' ', $string);
		$final = array();
		array_walk($partial, function($val,$key) use(&$final){
			
			$explResult=explode(':', $val);
			if (count($explResult)==2)
			{
				list($key, $value) = explode(':', $val);
		   		$final[$key] = $value;
			}
			else
			{
				//var_dump($explResult);
				list($key, $value) = ['g',$explResult[0]];
				$final[$key] = $value;
			
			}	
			//var_dump(explode(':', $val));


		});
		//print_r($final);		
		return $final;
	}






	

}