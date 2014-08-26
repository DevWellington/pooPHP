<?php

namespace Ribeiro\Cliente\Render;

interface RenderClienteInterface {

    public static function render(\Ribeiro\DB\CrudInterface $crudCliente);
    public static function getCrudCliente();

} 