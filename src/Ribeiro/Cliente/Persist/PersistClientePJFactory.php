<?php

namespace Ribeiro\Cliente\Persist;

class PersistClientePJFactory {

    public static function execute(
        \PDO $pdo,
        \Ribeiro\Cliente\Types\ClientePJ $clientePJ
    ) {
        try{
            $persistCliente = new \Ribeiro\Cliente\Persist\PersistCliente(
                new \Ribeiro\Cliente\Crud\CrudCliente($pdo),
                $clientePJ
            );

            $lastInsertId = $persistCliente->flush(
                $persistCliente->persist()
            );

            $persistClientePJ = new \Ribeiro\Cliente\Persist\PersistClientePJ(
                new \Ribeiro\Cliente\Crud\CrudClientePJ($pdo),
                $clientePJ
            );

            return $persistClientePJ->setIdCliente($lastInsertId)->flush(
                $persistClientePJ->persist()
            );


        } catch (\Exception $e){
            echo $e->getMessage();
            return false;
        }

        return false;
    }

}