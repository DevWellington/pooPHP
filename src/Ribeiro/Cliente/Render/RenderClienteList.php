<?php

namespace Ribeiro\Cliente\Render;

class RenderClienteList extends RenderClienteAbstract {

    protected static $crudCliente;

    public static function renderList(\Ribeiro\DB\CrudInterface $crudCliente, array $fields, $order){

        self::$crudCliente = $crudCliente;

        return self::$crudCliente->findAllOrderBy($fields, $order);
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