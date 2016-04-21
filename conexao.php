<?php

require_once 'config.php';
try{
    $conexao= new \PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'],$config['user'],$config['password']);
}
catch (\PDOException $e){
    die ("Erro código: ".$e->getCode().": ".$e->getMessage());
}