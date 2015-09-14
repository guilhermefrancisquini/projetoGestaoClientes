<?php

namespace Vendor\Cliente\Types;

use Vendor\Cliente\ClienteAbstract;
use Vendor\Cliente\Util\PFInterface;

class ClienteType extends ClienteAbstract implements PFInterface
{
	protected $cpf;

	function __construct($nome, $tipo, $cpf, $grauImportancia, $endereco, $idade, $enderecoCobrar="")
	{
		$this->setNome($nome);
		$this->tipoCliente($tipo);
		$this->setCpf($cpf);
		$this->grauImportancia($grauImportancia);
		$this->setEndereco($endereco);
		$this->setIdade($idade);
		$this->enderecoCobranca($enderecoCobrar);
	}

	public function setCPF($cpf)
	{
		$this->cpf = $cpf;
		return $this;
	}

	public function getCPF(){
		return $this->cpf;
	}
}