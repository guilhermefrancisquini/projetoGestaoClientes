<?php
/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 13/09/2015
 * Time: 12:41
 */

namespace Vendor\Cliente\Types;

use Vendor\Cliente\ClienteAbstract;
use Vendor\Cliente\Util\PJInterface;

class ClienteJuridicoType extends ClienteAbstract implements PJInterface
{
    protected $cnpj;
    
    function __construct($nome, $tipo, $cnpj, $grauImportancia, $endereco, $idade, $enderecoCobrar="")
    {
        $this->setNome($nome);
        $this->tipoCliente($tipo);
        $this->setCnpj($cnpj);
        $this->grauImportancia($grauImportancia);
        $this->setEndereco($endereco);
        $this->setIdade($idade);
        $this->enderecoCobranca($enderecoCobrar);
    }

    public function setCNPJ($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getCNPJ(){
        return $this->cnpj;
    }

}