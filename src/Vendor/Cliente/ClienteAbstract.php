<?php
/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 13/09/2015
 * Time: 11:15
 */

namespace Vendor\Cliente;


class ClienteAbstract
{
    protected $nome;
    protected $endereco;
    protected $enderecoCobrar;
    protected $idade;
    protected $tipo;
    protected $estrelas;

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

    public function setEstrelas($estrelas)
    {
        $this->estrelas = $estrelas;
        return $this;
    }

    public function getEstrelas()
    {
        return $this->estrelas;
    }
}