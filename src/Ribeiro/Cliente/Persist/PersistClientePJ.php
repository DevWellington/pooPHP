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

    public function save(){

        return parent::getCrudCliente()->insert(
            array(
                ':idCliente' => $this->idCliente,
                ':cnpj' => parent::getCliente()->getCnpj(),
                ':enderecoCobranca' => parent::getCliente()->getEnderecoCobranca()
            )
        );
    }
}