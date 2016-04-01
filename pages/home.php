<!-- Slide Carousel -->
<header id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <!--<img src="..." alt="...">-->
            <div class="carousel-caption">
                <p>O seu texto vai aqui</p>
            </div>
        </div>
        <div class="item">
            <!--<img src="..." alt="...">-->
            <div class="carousel-caption">
                ...
            </div>
        </div>
        ...
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="Pag_principal">
                <br/>O salão de beleza Vilas Boas oferece os melhores tratamentos com os melhores preços. Marque um
                horário conosco e venha conferir!<br/>
            </h1>
        </div>

        <!--Produtos-->
        <br/>

        <?php require_once("tabelaprodutos.php") ?>
        <hr>

        <!-- Serviços -->
        <?php require_once("tabeladeservicos.php") ?>

        <!-- Contato -->
        <?php require_once("formulariocontato.php") ?>
    </div>
</div>