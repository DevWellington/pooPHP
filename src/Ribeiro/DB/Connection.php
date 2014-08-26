<?php

namespace Ribeiro\DB;

class Connection {

    private static $instance;

    public static function getInstance(){

        if(!isset( self::$instance )){

            try {
                self::$instance = new \PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);

            } catch(Exception $e) {
                echo "Erro ao conectar\n " . $e->getMessage();
                exit();
            }
        }

        return self::$instance;

    }

}
