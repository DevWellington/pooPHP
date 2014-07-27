<?php
class PopulateData{

	private $client1;
	private $client2;
	private $client3;
	private $client4;
	private $client5;
	private $client6;
	private $client7;
	private $client8;
	private $client9;
	private $client10;

	private $arListaClientes;
	private $arClientesFull;

	public function __construct(){

		// Populate clients
		$this->cliente1 = new Cliente('Wellington', '000.000.000-00', 'Rua Aquela, 23', '00 0010-1034', 'M');
		$this->cliente2 = new Cliente('Jose Maria', '111.222.222-00', 'Rua Talvez, 22', '22 2212-1234', 'M');
		$this->cliente3 = new Cliente('Maria Jose', '333.333.000-00', 'Rua Ontem, 33', '33 3313-1234', 'F');
		$this->cliente4 = new Cliente('Claudio Jose', '444.222.444-00', 'Rua Algo, 44', '44 4414-1235', 'M');
		$this->cliente5 = new Cliente('Marcia', '555.555.555-00', 'Rua Nao Vou, 55', '55 5555-1234', 'F');
		$this->cliente6 = new Cliente('Claudia', '654.678.610-00', 'Rua Claro, 66', '66 6666-1234', 'F');
		$this->cliente7 = new Cliente('Gustavo', '777.777.111-03', 'Rua Dinheiro, 77', '77 7777-0123', 'M');
		$this->cliente8 = new Cliente('Adriano', '888.123.456-88', 'Rua Facil, 88', '88 8888-9012', 'M');
		$this->cliente9 = new Cliente('Flavio', '999.999.999-99', 'Rua Jose', '99 9999-0123', 'M');
		$this->cliente10 = new Cliente('Flavia', '000.000.222-03', 'Avenida Local, 34', '00 1394-1444', 'F');
	}

	public function getArClientsFull(){

		// Array of all clients
		$this->arClientesFull = array(
			1 => $this->cliente1->getCliente(), 
			2 => $this->cliente2->getCliente(), 
			3 => $this->cliente3->getCliente(), 
			4 => $this->cliente4->getCliente(), 
			5 => $this->cliente5->getCliente(), 
			6 => $this->cliente6->getCliente(), 
			7 => $this->cliente7->getCliente(), 
			8 => $this->cliente8->getCliente(), 
			9 => $this->cliente9->getCliente(), 
			10 => $this->cliente10->getCliente()
		);

		return $this->arClientesFull;
	}

	public function getArListClients(){

		// Array of clients list
		$this->arListaClientes = array(
			1 => $this->cliente1->getNome(), 
			2 => $this->cliente2->getNome(), 
			3 => $this->cliente3->getNome(), 
			4 => $this->cliente4->getNome(), 
			5 => $this->cliente5->getNome(), 
			6 => $this->cliente6->getNome(), 
			7 => $this->cliente7->getNome(), 
			8 => $this->cliente8->getNome(), 
			9 => $this->cliente9->getNome(), 
			10 => $this->cliente10->getNome()
		);

		return $this->arListaClientes;
	}
}