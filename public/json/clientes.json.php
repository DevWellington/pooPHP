<?php

require_once "../../src/classes/cliente.class.php";
header('Content-Type: application/json');

/*
 * ToDo: Criar classe para popular os dados e para retorno dos registros
 * 	class PopulateData;
 * 	class Json;
 *  class JsonFunctions;
*/

// Populate clients
$cliente1 = new Cliente('Wellington', '000.000.000-00', 'Rua Aquela, 23', '00 0010-1034', 'M');
$cliente2 = new Cliente('Jose Maria', '111.222.222-00', 'Rua Talvez, 22', '22 2212-1234', 'M');
$cliente3 = new Cliente('Maria Jose', '333.333.000-00', 'Rua Ontem, 33', '33 3313-1234', 'F');
$cliente4 = new Cliente('Claudio Jose', '444.222.444-00', 'Rua Algo, 44', '44 4414-1235', 'M');
$cliente5 = new Cliente('Marcia', '555.555.555-00', 'Rua Nao Vou, 55', '55 5555-1234', 'F');
$cliente6 = new Cliente('Claudia', '654.678.610-00', 'Rua Claro, 66', '66 6666-1234', 'F');
$cliente7 = new Cliente('Gustavo', '777.777.111-03', 'Rua Dinheiro, 77', '77 7777-0123', 'M');
$cliente8 = new Cliente('Adriano', '888.123.456-88', 'Rua Facil, 88', '88 8888-9012', 'M');
$cliente9 = new Cliente('Flavio', '999.999.999-99', 'Rua Jose', '99 9999-0123', 'M');
$cliente10 = new Cliente('Flavia', '000.000.222-03', 'Avenida Local, 34', '00 1394-1444', 'F');

// Array of all clients
$arClientesFull = array(
	1 => $cliente1->getCliente(), 
	2 => $cliente2->getCliente(), 
	3 => $cliente3->getCliente(), 
	4 => $cliente4->getCliente(), 
	5 => $cliente5->getCliente(), 
	6 => $cliente6->getCliente(), 
	7 => $cliente7->getCliente(), 
	8 => $cliente8->getCliente(), 
	9 => $cliente9->getCliente(), 
	10 => $cliente10->getCliente()
);

// Array of clients list
$arListaClientes = array(
	1 => $cliente1->getNome(), 
	2 => $cliente2->getNome(), 
	3 => $cliente3->getNome(), 
	4 => $cliente4->getNome(), 
	5 => $cliente5->getNome(), 
	6 => $cliente6->getNome(), 
	7 => $cliente7->getNome(), 
	8 => $cliente8->getNome(), 
	9 => $cliente9->getNome(), 
	10 => $cliente10->getNome()
);


/*
 * Function getJSON
 */
function getJson($array){
	return json_encode($array);
}

/*
 * Function getJSONOrderBy
 */
function getJSONOrderBy($array, $orderBy){
	if($orderBy === 'asc')
		ksort($array);
	elseif($orderBy === 'desc')
		krsort($array);

	return getJson($array);
}


// GETs
$get = (isset($_GET['type'])) ? $_GET['type'] : null;
$id = (isset($_GET['id'])) ? $_GET['id'] : null;
$orderBy = (isset($_GET['orderBy'])) ? $_GET['orderBy'] : null;

// Conditions
if($get === 'id' && $id !== null)
	echo getJson($arClientesFull[$id]);
elseif($get === 'listaClientes')
	echo getJSONOrderBy($arListaClientes, $orderBy);
elseif ($get === null)
	echo null;
