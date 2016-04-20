<?php

try{
    $conexao= new \PDO("mysql:host=localhost;dbname=curso_phpfoundation","jessica","truelove321");
}
catch (\PDOException $e){
    die ("Erro código: ".$e->getCode().": ".$e->getMessage());
}

$sql= "Select * from clientes";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$clientes=$stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($clientes as $cliente){
    echo $cliente['nome']." - ".$cliente['email']."<br>";

}