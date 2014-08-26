<?php

namespace Ribeiro\DB;

interface CrudInterface {

    public function findAll();
    public function find($id);
    public function findAllOrderBy(array $fields, $order);
    public function insert(array $parametros);
    public function update(array $parametros, $id);
    public function delete($id);

    public function getPdoInstance();

} 