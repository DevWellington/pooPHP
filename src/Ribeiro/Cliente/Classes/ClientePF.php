<?php

namespace Ribeiro\Cliente\Classes;

class ClientePF extends \Ribeiro\Cliente\Classes\Cliente{

	private $cpf;

	public function __construct(){
		$this->tipoCliente = 'Pessoa Física';
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
		return $this;		
	}

	public function getCliente(){
		return (Object) array(
			'tipoCliente' => $this->tipoCliente,
			'nome' => $this->nome, 
			'endereco' => $this->endereco,
			'enderecoCobranca' => $this->enderecoCobranca,
			'telefone' => $this->telefone,
			'starts' => $this->starts,
			'cpf' => $this->cpf
		);
	}	

}