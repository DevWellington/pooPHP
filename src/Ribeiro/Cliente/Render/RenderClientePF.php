<?php

namespace Ribeiro\Cliente\Render;

class RenderClientePF extends RenderClienteAbstract {

    protected static $crudCliente;

    public static function renderCliente(\Ribeiro\Cliente\Crud\CrudClientePF $crudClientePF, $idCliente)
    {
        self::$crudCliente = $crudClientePF;

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