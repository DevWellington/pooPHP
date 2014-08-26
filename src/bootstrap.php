<?php

require_once 'autoload.php';

// file config dataBase
require_once 'fixture.php';


use Ribeiro\Cliente\Types\ClientePF as ClientePF;
use Ribeiro\Cliente\Types\ClientePJ as ClientePJ;


$clientePF1 = new ClientePF();
$clientePF1
    ->setNome('Willian Rocha')
    ->setEndereco('Rua Talvez, 22')
    ->setEnderecoCobranca('Rua Talvez, 22')
    ->setCpf('111.222.222-00')
    ->setTelefone('2222121234')
    ->setStarts('4')
	/*->setNome('Wellington Ribeiro')
	->setEndereco('Rua Oito, 25')
	->setEnderecoCobranca('Rua Oito, 25')
	->setTelefone('3185847087')
	->setCpf('000.000.333-03')
	->setStarts('5')*/
;


$clientePF2 = new ClientePF();
$clientePF2
	->setNome('Jose Maria')
	->setEndereco('Rua Talvez, 22')
	->setEnderecoCobranca('Rua Talvez, 22')
	->setCpf('111.222.222-00')
	->setTelefone('2222121234')
	->setStarts('4')
;

$clientePF3 = new ClientePF();
$clientePF3
	->setNome('Maria Jose')
	->setEndereco('Rua Ontem, 33')
	->setEnderecoCobranca('Rua Ontem, 33')
	->setTelefone('3312341234')
	->setCpf('333.333.000-00')
	->setStarts('3')
;

$clientePF4 = new ClientePF();
$clientePF4
	->setNome('Claudio Jose')
	->setEndereco('Rua Algo, 44')
	->setEnderecoCobranca('Rua Algo, 44')
	->setTelefone('4444441235')
	->setCpf('444.222.444-00')
	->setStarts('2')

;

$clientePF5 = new ClientePF();
$clientePF5
	->setNome('Marcia')
	->setEndereco('Rua Nao Vou, 55')
	->setEnderecoCobranca('Rua Nao Vou, 55')
	->setCpf('555.555.555-00')
	->setTelefone('5555551234')
	->setStarts('3')
;

// Clients Pessoa Juridica

$clientePJ1 = new ClientePJ();
$clientePJ1
	->setNome('Empresa 001')
	->setEndereco('Rua Empresa 1, 25, Sala 011')
	->setEnderecoCobranca('Av Empresa 1, 25, Sala 001')
	->setTelefone('3133330000')
	->setCnpj('00.111.000/0001-01')
	->setStarts('1')
;


$clientePJ2 = new ClientePJ();
$clientePJ2
	->setNome('Empresa 002')
	->setEndereco('Rua Empresa 2, 25, Sala 022')
	->setEnderecoCobranca('Av Empresa 2, 25, Sala 002')
	->setTelefone('3133330000')
	->setCnpj('00.222.000/0002-02')
	->setStarts('4')
;


$clientePJ3 = new ClientePJ();
$clientePJ3
	->setNome('Empresa 003')
	->setEndereco('Rua Empresa 3, 35, Sala 033')
	->setEnderecoCobranca('Av Empresa 3, 35, Sala 003')
	->setTelefone('3133330000')
	->setCnpj('00.333.000/0003-03')
	->setStarts('5')
;


$clientePJ4 = new ClientePJ();
$clientePJ4
	->setNome('Empresa 004')
	->setEndereco('Rua Empresa 4, 45, Sala 044')
	->setEnderecoCobranca('Av Empresa 4, 45, Sala 004')
	->setTelefone('3133330000')
	->setCnpj('00.444.000/0004-04')
	->setStarts('4')
;


$clientePJ5 = new ClientePJ();
$clientePJ5
	->setNome('Empresa 005')
	->setEndereco('Rua Empresa 5, 55, Sala 055')
	->setEnderecoCobranca('Av Empresa 5, 55, Sala 005')
	->setTelefone('3133330000')
	->setCnpj('00.555.000/0005-05')
	->setStarts('5')
;

$pdo = \Ribeiro\DB\Connection::getInstance();

\Ribeiro\Cliente\Persist\Flush\FlushClientePFFactory::execute($pdo, $clientePF1);
\Ribeiro\Cliente\Persist\Flush\FlushClientePFFactory::execute($pdo, $clientePF2);
\Ribeiro\Cliente\Persist\Flush\FlushClientePFFactory::execute($pdo, $clientePF3);
\Ribeiro\Cliente\Persist\Flush\FlushClientePFFactory::execute($pdo, $clientePF4);
\Ribeiro\Cliente\Persist\Flush\FlushClientePFFactory::execute($pdo, $clientePF5);
\Ribeiro\Cliente\Persist\Flush\FlushClientePJFactory::execute($pdo, $clientePJ1);
\Ribeiro\Cliente\Persist\Flush\FlushClientePJFactory::execute($pdo, $clientePJ2);
\Ribeiro\Cliente\Persist\Flush\FlushClientePJFactory::execute($pdo, $clientePJ3);
\Ribeiro\Cliente\Persist\Flush\FlushClientePJFactory::execute($pdo, $clientePJ4);
\Ribeiro\Cliente\Persist\Flush\FlushClientePJFactory::execute($pdo, $clientePJ5);
