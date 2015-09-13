<?php
/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 13/09/2015
 * Time: 12:41
 */

namespace Vendor\Cliente\Types;

use Vendor\Cliente\ClienteAbstract;
use Vendor\Cliente\Util\ClienteInterface;

class ClienteJuridicoType extends ClienteAbstract implements ClienteInterface
{
    protected $cnpj;
    function __construct($nome, $tipo, $cnpj, $endereco, $idade, $enderecoCobrar="")
    {
        $this->setNome($nome);
        $this->tipoCliente($tipo);
        $this->setCnpj($cnpj);
        $this->setEndereco($endereco);
        $this->setIdade($idade);
        $this->enderecoCobranca($enderecoCobrar);
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getCnpj(){
        return $this->cnpj;
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