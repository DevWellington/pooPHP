<?php

namespace Ribeiro\Cliente\Interfaces;

interface PersistInterface {

    public function setCliente(\Ribeiro\Cliente\ClienteAbstract $cliente);
    public function getCliente();

    public function save();

} 