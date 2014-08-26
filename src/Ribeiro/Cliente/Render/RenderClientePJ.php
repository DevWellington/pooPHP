<?php

namespace Ribeiro\Cliente\Render;

class RenderClientePJ extends RenderClienteAbstract {

    protected static $crudCliente;

    public static function renderCliente(\Ribeiro\Cliente\Crud\CrudClientePJ $crudClientePJ, $idCliente)
    {
        self::$crudCliente = $crudClientePJ;

        return self::$crudCliente->findByIdCliente($idCliente);
    }

    public static function render(\Ribeiro\DB\CrudInterface $crudCliente)
    {
        return false;
    }

    public static function getCrudCliente()
    {
        return self::$crudCliente;
    }

}