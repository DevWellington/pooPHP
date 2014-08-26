<?php

namespace Ribeiro\Cliente\Persist;

class PersistCliente extends \Ribeiro\Cliente\Persist\PersistClienteAbstract {

    public function save(){

        return parent::getCrudCliente()->insert(
            array(
                ':nome' => parent::getCliente()->getNome(),
                ':endereco' => parent::getCliente()->getEndereco(),
                ':telefone' => parent::getCliente()->getTelefone(),
                ':starts' => parent::getCliente()->getStarts(),
                ':type' => parent::getCliente()->getType()
            )
        );
    }
}