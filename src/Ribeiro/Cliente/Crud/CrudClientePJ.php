<?php

namespace Ribeiro\Cliente\Crud;

class CrudClientePJ extends \Ribeiro\DB\CrudAbstract {

    protected $table = 'cliente_pj';

    public function insert(array $parametros)
    {
        $parametros = (isset($parametros)) ? $parametros : null;

        $sql = "INSERT INTO {$this->table} (idCliente, cnpj, enderecoCobranca) "
            . "    VALUES (:idCliente, :cnpj, :enderecoCobranca) ";

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
            . "    cnpj = :cnpj, "
            . "    enderecoCobranca = :enderecoCobranca "
            . "WHERE "
            . "    idCliente = :idCliente";

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

    public function findByIdCliente($idCliente)
    {
        $sql = "SELECT * FROM {$this->table} WHERE idCliente = :idCliente";
        try{
            $stmt = $this->pdoInstance->prepare($sql);
            $stmt->bindParam(':idCliente', $idCliente);

            if ($stmt->execute())
                return $stmt->fetch(\PDO::FETCH_OBJ);

        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        return false;
    }

}