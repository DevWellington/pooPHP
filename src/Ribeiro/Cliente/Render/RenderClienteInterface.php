<?php

namespace Ribeiro\Cliente\Render;

interface RenderClienteInterface {

    public function setCliente(\Ribeiro\Cliente\ClienteAbstract $cliente);
    public function getCliente();
    public function render();

} 