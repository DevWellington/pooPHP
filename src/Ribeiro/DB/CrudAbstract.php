<?php

namespace Ribeiro\DB;

abstract class CrudAbstract implements CrudInterface{

    protected $pdoInstance;
    protected $table = null;

    public function __construct(\PDO $pdoInstance)
    {
        $this->pdoInstance = $pdoInstance;
    }

    public function findAll()
    {
        try{
            $sql = "SELECT * FROM {$this->table}";
            $stmt = $this->pdoInstance->prepare($sql);
            if ($stmt->execute())
                return $stmt->fetchAll(\PDO::FETCH_OBJ);

        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        return false;
    }

    public function findAllOrderBy(array $fields, $order)
    {
        $fieldsList = implode(', ', $fields);

        $sql = "SELECT * FROM {$this->table} ORDER BY {$fieldsList} {$order} ";

        try{
            $stmt = $this->pdoInstance->prepare($sql);
            if ($stmt->execute())
                return $stmt->fetchAll(\PDO::FETCH_OBJ);

        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        return false;
    }

    public function find($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        try{
            $stmt = $this->pdoInstance->prepare($sql);
            $stmt->bindParam(':id', $id);

            if ($stmt->execute())
                return $stmt->fetch(\PDO::FETCH_OBJ);

        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        return false;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        try{
            $stmt = $this->pdoInstance->prepare($sql);
            $stmt->bindParam(':id', $id);

            if ($stmt->execute())
                return $stmt->fetchAll(\PDO::FETCH_OBJ);

        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        return false;
    }

    public function execute($sql)
    {
        try{
            $stmt = $this->pdoInstance->prepare($sql);

            return $stmt->execute();

        } catch (\PDOException $e) {
            echo $e->getMessage();
            return false;
        }

        return false;
    }

    public function insert(array $parametros){}


    public function update(array $parametros, $id){}
    // Getters ans Setters

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    public function getPdoInstance()
    {
        return $this->pdoInstance;
    }


}