<?php

namespace Ribeiro\Cliente\Persist;

abstract class PersistClienteAbstract implements \Ribeiro\Cliente\Interfaces\PersistInterface {

    protected $crudCliente;
    protected $cliente;

    public function __construct(
        \Ribeiro\DB\CrudInterface $crudCliente,
        \Ribeiro\Cliente\ClienteAbstract $cliente = null
    ) {
        $this->crudCliente = $crudCliente;
        $this->cliente = $cliente;
    }

    public function getCrudCliente()
    {
        return $this->crudCliente;
    }

    public function setCliente(\Ribeiro\Cliente\ClienteAbstract $cliente)
    {
        $this->cliente = $cliente;
        return $this;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function persist(){}
    public function flush(array $parametros)
    {
        $parametros = (isset($parametros)) ? $parametros : null;

        return $this->getCrudCliente()->insert($parametros);
    }

} 