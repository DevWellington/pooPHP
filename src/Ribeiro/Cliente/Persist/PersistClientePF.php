<?php

namespace Ribeiro\Cliente\Persist;

class PersistClientePF extends \Ribeiro\Cliente\Persist\PersistClienteAbstract {

    private $idCliente;

    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
        return $this;
    }

    public function persist()
    {
        return array(
            ':idCliente' => $this->idCliente,
            ':cpf' => parent::getCliente()->getCpf(),
            ':enderecoCobranca' => parent::getCliente()->getEnderecoCobranca()
        );
    }

}