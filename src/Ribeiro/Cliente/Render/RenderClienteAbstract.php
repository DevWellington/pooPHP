<?php

namespace Ribeiro\Cliente\Render;

use \Ribeiro\Cliente\Render;

abstract class RenderClienteAbstract implements RenderClienteInterface {

    protected static $crudCliente;
    protected static $html;

    public static function getCrudCliente()
    {
        return self::$crudCliente;
    }

    public static function getHtml()
    {
        return self::$html;
    }

    public static function htmlAdd($html)
    {
        self::$html .= $html;
    }

    public static function render(\Ribeiro\DB\CrudInterface $crudCliente){}

}