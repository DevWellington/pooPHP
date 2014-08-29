<?php

namespace Ribeiro\Cliente\Persist\Flush;

class FlushClientePJFactory {

    public static function execute(
        \PDO $pdo,
        \Ribeiro\Cliente\Types\ClientePJ $clientePJ
    ) {
        $persistCliente = new \Ribeiro\Cliente\Persist\PersistCliente(
            new \Ribeiro\Cliente\Crud\CrudCliente($pdo),
            $clientePJ
        );

        $lastInsertId = $persistCliente->save();

        $persistClientePJ = new \Ribeiro\Cliente\Persist\PersistClientePJ(
            new \Ribeiro\Cliente\Crud\CrudClientePJ($pdo),
            $clientePJ
        );

        return $persistClientePJ->setIdCliente($lastInsertId)->save();
    }

}