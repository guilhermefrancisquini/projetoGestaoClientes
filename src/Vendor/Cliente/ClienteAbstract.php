<?php
/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 13/09/2015
 * Time: 11:15
 */

namespace Vendor\Cliente;
use Vendor\Cliente\Util\EnderecoCobrancaInterface;
use Vendor\Cliente\Util\GrauImportanciaInterface;

class ClienteAbstract implements EnderecoCobrancaInterface, GrauImportanciaInterface
{
    protected $nome;
    protected $endereco;
    protected $enderecoCobrar;
    protected $idade;
    protected $tipo;    
    protected $grauImportancia;

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getEnderecoCobrar()
    {
        return $this->enderecoCobrar;
    }

    public function getGrauImportancia()
    {
        return $this->grauImportancia;
    }

    public function enderecoCobranca($enderecoCobrar)
    {
        if(empty($enderecoCobrar))
        {
            $this->enderecoCobrar = $this->endereco;
        }
        else
        {
            $this->enderecoCobrar = $enderecoCobrar;
        }

        return $this->enderecoCobrar;
    }

    public function grauImportancia($grauImportancia)
    {
        $this->grauImportancia = $grauImportancia;
        return $this->grauImportancia;
    }

    public function tipoCliente($tipo){
        $this->tipo = $tipo;
        return $this->tipo;
    }
}