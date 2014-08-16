<?php

namespace Ribeiro\Cliente\Types;

class ClientePJ extends \Ribeiro\Cliente\ClienteAbstract{

	private $cnpj;

	public function __construct(){
		$this->tipoCliente = 'Pessoa Juridica';
        $this->type = "PJ";
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
		return $this;
	}

    public function getType(){
        return $this->type;
    }

}