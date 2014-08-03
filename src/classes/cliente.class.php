<?php

class Cliente{

	private $nome;
	private $cpf;
	private $endereco;
	private $telefone;
	private $sexo;

	public function getCliente(){
		return (Object) array(
			'nome' => $this->nome, 
			'cpf' => $this->cpf,
			'endereco' => $this->endereco,
			'telefone' => $this->telefone,
			'sexo' => $this->sexo
		);
	}

    /**
     * Gets the value of nome.
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }
    
    /**
     * Sets the value of nome.
     *
     * @param mixed $nome the nome 
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Gets the value of cpf.
     *
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }
    
    /**
     * Sets the value of cpf.
     *
     * @param mixed $cpf the cpf 
     *
     * @return self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Gets the value of endereco.
     *
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }
    
    /**
     * Sets the value of endereco.
     *
     * @param mixed $endereco the endereco 
     *
     * @return self
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Gets the value of telefone.
     *
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }
    
    /**
     * Sets the value of telefone.
     *
     * @param mixed $telefone the telefone 
     *
     * @return self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Gets the value of sexo.
     *
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }
    
    /**
     * Sets the value of sexo.
     *
     * @param mixed $sexo the sexo 
     *
     * @return self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }
}