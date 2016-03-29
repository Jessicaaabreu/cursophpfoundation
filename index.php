<?php
$rota = $_SERVER['REQUEST_URI'];
   $rota = explode("/", $rota);

       if($rota[1] == ""){
             $Pag = "index.php";

if(file_exists($rota[1].".php"))
{
                   $Pag = $rota[1].".php";
}
           else
           {
                 $Pag = "error404.php";
             }
?>

<?php require_once("menu.php")?>

<!-- Slide Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#" data-slide-to="0" class="active"></li>
        <li data-target="#" data-slide-to="1"></li>
        <li data-target="#" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
            <div class="carousel-caption">
                <h2>Titulo 1</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
            <div class="carousel-caption">
                <h2>Título 2</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
            <div class="carousel-caption">
                <h2>Título 3</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="Pag_principal">
                <br/>O salão de beleza Vilas Boas oferece os melhores tratamentos com os melhores preços. Marque um horário conosco e venha conferir!<br/>
            </h1>
        </div>

        <!--Produtos-->
        <br/>

        <?php require_once("tabelaprodutos.php")?>
        <hr>

        <!-- Serviços -->
        <?php require_once("tabeladeservicos.php")?>

        <!-- Contato -->
        <?php require_once("formulariocontato.php")?>

        <?php require_once("rodape.php")?>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>

</html>

