<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Vilas Boas,Salão,Salão de Beleza,Beleza,Rutiane Vilas Boas,Cabelos"/>
    <meta name="description" content="Salão de Beleza em Itabuna-Ba."/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Jéssica Abreu">

    <title>Vilas Boas - Salão</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/salao.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php

require_once("conexao.php");
function verificaRota($url, $rotas)
{
    if(in_array($url, $rotas)) {
        return true;
    }
    return false;
}

$rotas = ["home", "sobre", "produtos", "servicos", "contato"];

$url = $_SERVER['REQUEST_URI'];
$url = explode("/", $url);

if($url[1] == "") {
    $page = "pages/home.php";
}
else{
    if(verificaRota($url[1], $rotas)) {
        if (file_exists("pages/" . $url[1] . ".php")) {
            $page = "pages/" . $url[1] . ".php";
        } else {
            $page = "pages/error404.php";
        }
    }else{
        $page = "pages/error404.php";
    }
}

require_once("partial/menu.php");
require_once($page);
require_once("partial/rodape.php"); ?>


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

</body>

</html>

