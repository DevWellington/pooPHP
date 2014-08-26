<?php

namespace Ribeiro\Cliente\Render;

class RenderClienteFactory {

    public static function renderFactory(
        \PDO $pdo,
        \stdClass $cliente
    ) {
        try{

            $arCliente = [];

            if ($cliente->type === 'PF'){
                $clientePF = \Ribeiro\Cliente\Render\RenderClientePF::renderCliente(
                    new \Ribeiro\Cliente\Crud\CrudClientePF($pdo),
                    $cliente->id
                );

                $arCliente = (array) $cliente;

                $arCliente['cpf'] = isset($clientePF->cpf) ? $clientePF->cpf : null;
                $arCliente['enderecoCobranca'] = isset($clientePF->enderecoCobranca) ? $clientePF->enderecoCobranca : null;


            } elseif ($cliente->type === 'PJ'){

                $clientePJ = \Ribeiro\Cliente\Render\RenderClientePJ::renderCliente(
                    new \Ribeiro\Cliente\Crud\CrudClientePJ($pdo),
                    $cliente->id
                );

                $arCliente = (array) $cliente;

                $arCliente['cnpj'] = isset($clientePJ->cnpj) ? $clientePJ->cnpj : null;
                $arCliente['enderecoCobranca'] = isset($clientePJ->enderecoCobranca) ? $clientePJ->enderecoCobranca : null;

            }

            return (object) $arCliente; // return

        } catch(\Exception $e){
            echo $e->getMessage();
            return false;
        }

        return false;

    }

} 