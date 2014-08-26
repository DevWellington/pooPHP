<?php

namespace Ribeiro\Cliente\Crud;

class CrudCliente extends \Ribeiro\DB\CrudAbstract {

    protected $table = 'cliente';

    public function insert(array $parametros)
    {
        $parametros = (isset($parametros)) ? $parametros : null;

        $sql = "INSERT INTO {$this->table} (nome, endereco, telefone, starts, type) "
             . "    VALUES (:nome, :endereco, :telefone, :starts, :type) ";

        try{
            $stmt = parent::getPdoInstance()->prepare($sql);

            if ($stmt->execute($parametros))
                return parent::getPdoInstance()->lastInsertId();

        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        return false;
    }

    public function update(array $parametros, $id)
    {
        $sql = "UPDATE {$this->table} SET "
            . "    nome = :nome, "
            . "    endereco = :endereco, "
            . "    telefone = :telefone, "
            . "    starts = :starts, "
            . "    type = :type "
            . "WHERE "
            . "    id = :id";

        try{
            $stmt = parent::getPdoInstance()->prepare($sql);

            if ($stmt->execute($parametros))
                return true;

        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        return false;
    }
}