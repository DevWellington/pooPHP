<?php

require_once 'Cliente.class.php';

class ClientePJ extends Cliente{

	private $cnpj;

	public function __construct(){
		$this->tipoCliente = 'Pessoa Juridica';
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
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
			'cnpj' => $this->cnpj
		);
	}
}