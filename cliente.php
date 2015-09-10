<?php

class Cliente 
{
	protected $nome;
	protected $cpf;
	protected $endereco;
	protected $idade;

	function __construct($nome, $cpf, $endereco, $idade)
	{
		$this->setNome($nome);
		$this->setCpf($cpf);
		$this->setEndereco($endereco);
		$this->setIdade($idade);		
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
		return $this;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
		return $this;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setEndereco($endereco)
	{
		$this->endereco = $endereco;
		return $this;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setIdade($idade)
	{
		$this->idade = $idade;
		return $this;
	}

	public function getIdade(){
		return $this->idade;
	}

}