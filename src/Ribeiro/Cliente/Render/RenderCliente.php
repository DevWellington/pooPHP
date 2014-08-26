<?php

namespace Ribeiro\Cliente\Render;

class RenderCliente extends RenderClienteAbstract {

    protected static $crudCliente;

    public static function renderCliente(\Ribeiro\DB\CrudInterface $crudCliente, $routeCliente)
    {
        self::$crudCliente = $crudCliente;

        return self::$crudCliente->find($routeCliente);
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