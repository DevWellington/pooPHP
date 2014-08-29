<?php

namespace Ribeiro\Cliente\Persist\Flush;

class FlushClientePFFactory {

    public static function execute(
        \PDO $pdo,
        \Ribeiro\Cliente\Types\ClientePF $clientePF
    ) {

        try{
            $persistCliente = new \Ribeiro\Cliente\Persist\PersistCliente(
                new \Ribeiro\Cliente\Crud\CrudCliente($pdo),
                $clientePF
            );

            $lastInsertId = $persistCliente->save();

            $persistClientePF = new \Ribeiro\Cliente\Persist\PersistClientePF(
                new \Ribeiro\Cliente\Crud\CrudClientePF($pdo),
                $clientePF
            );

            return $persistClientePF->setIdCliente($lastInsertId)->save();

        } catch (\Exception $e){
            echo $e->getMessage();
            return false;
        }
    }

} 