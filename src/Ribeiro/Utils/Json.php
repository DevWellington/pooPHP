<?php

namespace Ribeiro\Utils;

class Json{

	/*
	 * Method getJSON
	 */
	public static function getJson($array){
		return json_encode($array);
	}

	/*
	 * Method getJSONOrderBy
	 */
	public static function getJSONOrderBy($array, $orderBy){
		if($orderBy === 'asc')
			ksort($array);
		elseif($orderBy === 'desc')
			krsort($array);

		return self::getJson($array);
	}
}