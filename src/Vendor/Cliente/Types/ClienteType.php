<?php

namespace Vendor\Cliente\Types;

use Vendor\Cliente\ClienteAbstract;
use Vendor\Cliente\Util\ClienteInterface;

class ClienteType extends ClienteAbstract implements ClienteInterface
{
	protected $cpf;

	function __construct($nome, $tipo, $cpf, $endereco, $idade, $enderecoCobrar="")
	{
		$this->setNome($nome);
		$this->tipoCliente($tipo);
		$this->setCpf($cpf);
		$this->setEndereco($endereco);
		$this->setIdade($idade);
		$this->enderecoCobranca($enderecoCobrar);
	}

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
		return $this;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function tipoCliente($tipo){
		$this->tipo = $tipo;
		return $this->tipo;
	}
	public function enderecoCobranca($endereco){
		$this->enderecoCobrar = $endereco;
		return $this->enderecoCobrar;
	}
}