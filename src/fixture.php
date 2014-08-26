<?php

// Paramentros do Banco de Dados
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASS', '');


$sql = "
    CREATE TABLE cliente (
      id int(11) NOT NULL AUTO_INCREMENT,
      nome varchar(50) DEFAULT NULL,
      endereco varchar(255) DEFAULT NULL,
      telefone int(20) DEFAULT NULL,
      starts int(1) DEFAULT NULL,
      type varchar(2) DEFAULT NULL,
      PRIMARY KEY (id),
      UNIQUE KEY nome (nome)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    CREATE TABLE cliente_pf (
      id int(11) NOT NULL AUTO_INCREMENT,
      idCliente int(11) DEFAULT NULL,
      cpf varchar(50) DEFAULT NULL,
      enderecoCobranca varchar(255) DEFAULT NULL,
      PRIMARY KEY (id),
      UNIQUE KEY cpf (cpf),
      KEY FK_clientepf_cliente (idCliente),
      CONSTRAINT FK_clientepf_cliente FOREIGN KEY (idCliente) REFERENCES cliente (id) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    CREATE TABLE cliente_pj (
      id int(11) NOT NULL AUTO_INCREMENT,
      idCliente int(11) DEFAULT NULL,
      cnpj varchar(50) DEFAULT NULL,
      enderecoCobranca varchar(255) DEFAULT NULL,
      PRIMARY KEY (id),
      UNIQUE KEY cnpj (cnpj),
      KEY FK_clientePJ_cliente (idCliente),
      CONSTRAINT FK_clientePJ_cliente FOREIGN KEY (idCliente) REFERENCES cliente (id) ON DELETE CASCADE ON UPDATE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

";

$crd = new \Ribeiro\Cliente\Crud\CrudCliente(
    \Ribeiro\DB\Connection::getInstance()
);
$crd->execute($sql);