<?php
/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 13/09/2015
 * Time: 12:32
 */

namespace Vendor\Cliente\Util;


interface ClienteInterface
{
    public function tipoCliente($tipo);
    public function enderecoCobranca($endereco);
}