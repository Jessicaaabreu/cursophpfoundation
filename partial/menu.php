<!-- Navegação -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navegacao">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
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

                <li class="<?php if ($Pag == 'index.php') echo 'active' ?>"><a href="home">Início</a></li>
                <li class="<?php if ($Pag == 'sobre.php') echo 'active' ?>"><a href="sobre">Sobre</a></li>
                <li class="<?php if ($Pag == 'produto.php') echo 'active' ?>"><a href="produtos">Produtos</a></li>
                <li class="<?php if ($Pag == 'servicos.php') echo 'active' ?>"><a href="servicos">Serviços</a></li>
                <li class="<?php if ($Pag == 'contato.php') echo 'active' ?>"><a href="contato">Contato</a></li>

                <form action="resultado" class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" name="busca" class="form-control" placeholder="Pesquisar">
                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> </button>
                </form>

            </ul>

        </div>
</nav>

