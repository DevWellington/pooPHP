<?php
require_once "../../src/fixture.php";

header('Content-Type: application/json');

use \Ribeiro\Utils\Json as Json;

// GETs
$get = (isset($_GET['type'])) ? $_GET['type'] : null;
$id = (isset($_GET['id'])) ? $_GET['id'] : null;
$orderBy = (isset($_GET['orderBy'])) ? $_GET['orderBy'] : null;


// Conditions
if($get === 'id' && $id !== null){
	echo Json::getJson($arClientesFull[$id]);

} elseif($get === 'listaClientes'){

	$arListaClientes = [];
	foreach ($arClientesFull as $key => $value)
		$arListaClientes[$key] = $value->nome;
	
	echo Json::getJSONOrderBy($arListaClientes, $orderBy);
} elseif ($get === null){
	echo null;
}