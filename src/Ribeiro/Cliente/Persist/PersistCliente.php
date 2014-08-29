<?php

namespace Ribeiro\Cliente\Persist;

class PersistCliente extends \Ribeiro\Cliente\Persist\PersistClienteAbstract {

    public function persist()
    {
        return array(
            ':nome' => parent::getCliente()->getNome(),
            ':endereco' => parent::getCliente()->getEndereco(),
            ':telefone' => parent::getCliente()->getTelefone(),
            ':starts' => parent::getCliente()->getStarts(),
            ':type' => parent::getCliente()->getType()
        );
    }
}