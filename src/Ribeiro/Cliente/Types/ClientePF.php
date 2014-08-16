<?php

namespace Ribeiro\Cliente\Types;

class ClientePF extends \Ribeiro\Cliente\ClienteAbstract{

	private $cpf;

	public function __construct(){
		$this->tipoCliente = 'Pessoa Física';
        $this->type = "PF";
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
		return $this;
	}

    public function getType(){
        return $this->type;
    }

}