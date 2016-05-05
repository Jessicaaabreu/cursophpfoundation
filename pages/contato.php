<?php
require_once 'conexao.php';


$page='contato';
$sql= "Select * from paginas where pagina = :page";
$stmt = $conexao->prepare($sql);
$stmt->BindValue("page",$page);
$stmt->execute();
$pagina=$stmt->fetch(PDO::FETCH_ASSOC);

if($pagina){
    echo $pagina['conteudo'];
}else{
    echo "O conteúdo dessa página não existe no Banco de Dados!";
}



