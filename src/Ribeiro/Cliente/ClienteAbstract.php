<?php

namespace Ribeiro\Cliente;

use Ribeiro\Cliente\Interfaces\ImportanceClientInterface as ImportanceClientInterface;
use Ribeiro\Cliente\Interfaces\EnderecoCobrancaClienteInterface as EnderecoCobrancaClienteInterface;

abstract class ClienteAbstract implements ImportanceClientInterface, EnderecoCobrancaClienteInterface{

    // Attributes Interfaces
    protected $starts;
    protected $enderecoCobranca;

    // Attributes Class
    protected $nome;
    protected $endereco;
    protected $telefone;
    protected $tipoCliente;
    protected $type;

    // Getters and Setters
    public function getStarts(){
        return $this->starts;
    }

    public function setStarts($starts){

        $this->starts = ($starts > 5) ? 5 : $starts;
        return $this;
    }

    public function getEnderecoCobranca(){
        return $this->enderecoCobranca;
    }

    public function setEnderecoCobranca($enderecoCobranca){
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
        return $this;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    
    public function setEndereco($endereco){
        $this->endereco = $endereco;
        return $this;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    
    public function setTelefone($telefone){
        $this->telefone = $telefone;
        return $this;
    }

    public function getTipoCliente(){
        return $this->tipoCliente;
    }

    public function setTipoCliente($tipoCliente){
        $this->tipoCliente = $tipoCliente;
        return $tipoCliente;
    }

    public function getType(){
        return $this->type;
    }
}

