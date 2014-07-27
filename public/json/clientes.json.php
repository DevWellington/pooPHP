<?php

require_once "../../src/classes/cliente.class.php";
require_once "../../src/classes/populateData.class.php";
require_once "../../src/lib/json.lib.php";

header('Content-Type: application/json');

$clientData = new PopulateData();

// GETs
$get = (isset($_GET['type'])) ? $_GET['type'] : null;
$id = (isset($_GET['id'])) ? $_GET['id'] : null;
$orderBy = (isset($_GET['orderBy'])) ? $_GET['orderBy'] : null;

// Conditions
if($get === 'id' && $id !== null)
	echo Json::getJson($clientData->getArClientsFull()[$id]);
elseif($get === 'listaClientes')
	echo Json::getJSONOrderBy($clientData->getArListClients(), $orderBy);
elseif ($get === null)
	echo null;
