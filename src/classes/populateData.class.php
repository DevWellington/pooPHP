<?php
class PopulateDefaultData{

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
		$this->cliente1 = new Cliente();
		$this->cliente1
			->setNome('Wellington')
			->setCpf('000.000.000-00')
			->setEndereco('Rua Aquela, 23')
			->setTelefone('00 0010-1034')
			->setSexo('M')
		;

		$this->cliente2 = new Cliente();
		$this->cliente2
			->setNome('Jose Maria')
			->setCpf('111.222.222-00')
			->setEndereco('Rua Talvez, 22')
			->setTelefone('22 2212-1234')
			->setSexo('M')
		;

		$this->cliente3 = new Cliente();
		$this->cliente3
			->setNome('Maria Jose')
			->setCpf('333.333.000-00')
			->setEndereco('Rua Ontem, 33')
			->setTelefone('33 3313-1234')
			->setSexo('F')
		;

		$this->cliente4 = new Cliente();
		$this->cliente4
			->setNome('Claudio Jose')
			->setCpf('444.222.444-00')
			->setEndereco('Rua Algo, 44')
			->setTelefone('44 4414-1235')
			->setSexo('M')
		;

		$this->cliente5 = new Cliente();
		$this->cliente5
			->setNome('Marcia')
			->setCpf('555.555.555-00')
			->setEndereco('Rua Nao Vou, 55')
			->setTelefone('55 5555-1234')
			->setSexo('F')
		;

		$this->cliente6 = new Cliente();
		$this->cliente6
			->setNome('Claudia')
			->setCpf('654.678.610-00')
			->setEndereco('Rua Claro, 66')
			->setTelefone('66 6666-1234')
			->setSexo('F')
		;


		$this->cliente7 = new Cliente();
		$this->cliente7
			->setNome('Gustavo')
			->setCpf('777.777.111-03')
			->setEndereco('Rua Dinheiro, 77')
			->setTelefone('77 7777-0123')
			->setSexo('M')
		;

		$this->cliente8 = new Cliente();
		$this->cliente8
			->setNome('Adriano')
			->setCpf('888.123.456-88')
			->setEndereco('Rua Facil, 88')
			->setTelefone('88 8888-9012')
			->setSexo('M')
		;

		$this->cliente9 = new Cliente();
		$this->cliente9
			->setNome('Flavio')
			->setCpf('999.999.999-99')
			->setEndereco('Rua Jose')
			->setTelefone('99 9999-0123')
			->setSexo('M')
		;

		$this->cliente10 = new Cliente();
		$this->cliente10
			->setNome('Flavia')
			->setCpf('000.000.222-03')
			->setEndereco('Avenida Local, 34')
			->setTelefone('00 1394-1444')
			->setSexo('F')
		;

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