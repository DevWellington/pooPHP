<?php

namespace Ribeiro\Cliente\Render;

class RenderClienteContent extends \Ribeiro\Cliente\Render\RenderClienteAbstract{

    public function render(){

        parent::htmlAdd("<h2 id=\"nomeCliente\">". parent::getCliente()->getNome() ."</h2>");
        parent::htmlAdd("<ul>");
        parent::htmlAdd("    <li>Tipo Cliente: <span id=\"tipoCliente\">". parent::getCliente()->getTipoCliente() ."</span></li> ");
        if (parent::getCliente()->getType() === "PF")
            parent::htmlAdd("    <li>CPF: <span id=\"cpf\">".  parent::getCliente()->getCpf() ."</span></li>");
        elseif (parent::getCliente()->getType() === "PJ")
            parent::htmlAdd("    <li>CNPJ: <span id=\"cnpj\">".  parent::getCliente()->getCnpj() ."</span></li>");
        parent::htmlAdd("    <li>Endereco: <span id=\"endereco\">".  parent::getCliente()->getEndereco() ."</span></li>");
        parent::htmlAdd("    <li>Endereco Cobrança: <span id=\"enderecoCobranca\">".  parent::getCliente()->getEnderecoCobranca() ."</span></li>");
        parent::htmlAdd("    <li>Telefone: <span id=\"telefone\">".  parent::getCliente()->getTelefone() ."</span></li>");
        parent::htmlAdd("    <li>Grau Importancia: <span id=\"starts\">".  parent::getCliente()->getStarts() ."</span></li>");
        parent::htmlAdd("</ul>");

        return parent::getHtml();
    }
}