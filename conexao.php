<?php

try{
    $conexao= new \PDO("mysql:host=localhost;dbname=curso_phpfoundation","jessica","truelove321");
}
catch (\PDOException $e){
    die ("Erro código: ".$e->getCode().": ".$e->getMessage());
}

$id=1;
$sql= "Select * from clientes where id= :id";
$stmt = $conexao->prepare($sql);
$stmt->BindValue("id",$id);
$stmt->execute();
$clientes=$stmt->fetch(PDO::FETCH_ASSOC);

print_r($clientes);


