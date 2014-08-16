<?php

namespace Ribeiro\Cliente\Render;

use \Ribeiro\Cliente\Render;

abstract class RenderClienteAbstract implements RenderClienteInterface {

    private $cliente;
    private $html;

    public function __construct(\Ribeiro\Cliente\ClienteAbstract $cliente = null){
        $this->cliente = $cliente;
    }

    public function setCliente(\Ribeiro\Cliente\ClienteAbstract $cliente){
        $this->cliente = $cliente;
        return $this;
    }

    public function getCliente(){
        return $this->cliente;
    }

    public function getHtml(){
        return $this->html;
    }

    public function htmlAdd($html){
        $this->html .= $html;
    }

    public function render(){}

}