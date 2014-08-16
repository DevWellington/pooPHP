<?php

namespace Ribeiro\Cliente\Render;


class RenderClienteList extends RenderClienteAbstract {

    private $arrayClients = array();
    private $order = "ASC";

    public function setArrayClients(array $arrayClients){
        $this->arrayClients = $arrayClients;
        return $this;
    }

    public function getArrayClients(){
        return $this->arrayClients;
    }

    public function setOrder($order){
        $this->order = $order;
        return $this;
    }

    public function getOrder(){
        return $this->order;
    }

    public function render(){

        if ($this->order === 'DESC')
            foreach(array_reverse($this->arrayClients) as $key => $value){
                $key = ( (count($this->arrayClients) - $key) - 1 );
                parent::htmlAdd("<a href='//".$_SERVER['HTTP_HOST']."/".$key."/".$this->order."'><p>".$value->getNome()."</p></a>\n");
            }
        else
            foreach($this->arrayClients as $key => $value)
                parent::htmlAdd("<a href='//".$_SERVER['HTTP_HOST']."/".$key."/".$this->order."'><p>".$value->getNome()."</p></a>\n");


        return parent::getHtml();
    }

}






