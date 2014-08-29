<?php

namespace Ribeiro\Cliente\Persist;

class PersistClientePJ extends \Ribeiro\Cliente\Persist\PersistClienteAbstract {

    private $idCliente;

    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
        return $this;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function persist()
    {
        return array(
            ':idCliente' => $this->idCliente,
            ':cnpj' => parent::getCliente()->getCnpj(),
            ':enderecoCobranca' => parent::getCliente()->getEnderecoCobranca()
        );
    }

}