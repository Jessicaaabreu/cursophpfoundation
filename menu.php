<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="keywords" content="Vilas Boas,Salão,Salão de Beleza,Beleza,Rutiane Vilas Boas,Cabelos" />
    <meta name="description" content="Salão de Beleza em Itabuna-Ba." />
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

<!-- Navegação -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navegacao">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Salão Vilas Boas</a>
        </div>

        <!-- Menu-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li class="<?php if($Pag == 'index.php') echo 'active' ?>"><a href="index">Início</a></li>
                    <li class="<?php if($Pag == 'sobre.php') echo 'active' ?>"><a href="sobre">Sobre</a></li>
                    <li class="<?php if($Pag == 'produto.php') echo 'active' ?>"><a href="produto">Produtos</a></li>
                    <li class="<?php if($Pag == 'servicos.php') echo 'active' ?>"><a href="servicos">Serviços</a></li>
                    <li class="<?php if($Pag == 'contato.php') echo 'active' ?>"><a href="contato">Contato</a></li>

        </div>
</nav>

