<?php

    require_once 'conexao.php';

echo "### EXECUTANDO FIXTURE ###\n";

echo "### Removendo Tabela paginasv ###\n";

$conexao->query("DROP TABLE IF EXISTS paginas;");

echo "Ok\n";

echo "### Criando Tabela paginas ###\n";

$conexao->query("CREATE TABLE paginas (
  id int(11) NOT NULL AUTO_INCREMENT,
  pagina varchar(45) NOT NULL,
  conteudo text NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;");

echo "Ok\n";

echo "### Inserindo os Dados da Tabela paginas ###\n";
echo "### Inserindo os Dados da pagina HOME ###\n";

$conexao->query("INSERT INTO `curso_phpfoundation`.`paginas`
(`pagina`,`conteudo`)
VALUES ('home', '<!-- Slide Carousel -->
<header id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
        <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
        <div class=\"item active\">
            <!--<img src=\"...\" alt=\"...\">-->
            <div class=\"carousel-caption\">
                <p>O seu texto vai aqui</p>
            </div>
        </div>
        <div class=\"item\">
            <!--<img src=\"...\" alt=\"...\">-->
            <div class=\"carousel-caption\">
                ...
            </div>
        </div>
        ...
    </div>

    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</header>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"Pag_principal\">
                <br/>O salão de beleza Vilas Boas oferece os melhores tratamentos com os melhores preços. Marque um
                horário conosco e venha conferir!<br/>
            </h1>
        </div>

        <!--Produtos-->
        <br/>

        <!-- Painel de Produtos-->
<div class=\"row\">

    <div class=\"col-md-3 col-sm-6\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-tree fa-stack-1x fa-inverse\"></i>
                        </span>
            </div>
            <div class=\"panel-body\">
                <h4>Maquiagem</h4>
                <p>Descrição aqui.</p>
                <a href=\"#\" class=\"btn btn-primary\">Leia mais</a>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 col-sm-6\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-car fa-stack-1x fa-inverse\"></i>
                        </span>
            </div>
            <div class=\"panel-body\">
                <h4>Perfumaria</h4>
                <p>Descrição aqui.</p>
                <a href=\"#\" class=\"btn btn-primary\">Leia mais</a>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 col-sm-6\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-support fa-stack-1x fa-inverse\"></i>
                        </span>
            </div>
            <div class=\"panel-body\">
                <h4>Cabelo</h4>
                <p>Descrição aqui.</p>
                <a href=\"#\" class=\"btn btn-primary\">Leia mais</a>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 col-sm-6\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-database fa-stack-1x fa-inverse\"></i>
                        </span>
            </div>
            <div class=\"panel-body\">
                <h4>Corpo</h4>
                <p>Descrição aqui.</p>
                <a href=\"#\" class=\"btn btn-primary\">Leia mais</a>
            </div>
        </div>
    </div>
</div>
        <hr>

        <!-- Serviços -->
        <div class=\"container\">
    <!-- Lista de Serviços -->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h2 class=\"page-header\">Trabalhamos com:</h2>
        </div>
        <br/>
        <div class=\"col-md-4\">
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-tree fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 1</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-car fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 2</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-support fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 3</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-database fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 4</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-bomb fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 5</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-bank fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 6</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-paper-plane fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 7</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-space-shuttle fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 8</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-recycle fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 9</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
        </div>
    </div>

    <hr>

        <!-- Contato -->
        <div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-8\">
        <h3>Agende um horário</h3><br/>

        <form name=\"Mensagem\" id=\"contactForm\" method=\"post\" >
            <div class=\"control-group form-group\">
                <div class=\"controls\">
                    <label>Nome:</label>
                    <input  type=\"text\" class=\"form-control\" name=\"nome\" required data-validation-required-message=\"Insira seu nome aqui.\">
                    <p class=\"help-block\"></p>
                </div>
            </div>
            <div class=\"control-group form-group\">
                <div class=\"controls\">
                    <label>Email:</label>
                    <input type=\"email\" class=\"form-control\" name=\"email\" required data-validation-required-message=\"Insira seu email aqui.\">
                </div>
            </div>
            <div class=\"control-group form-group\">
                <div class=\"controls\">
                    <label>Assunto:</label>
                    <textarea rows=\"3\" cols=\"10\" class=\"form-control\" name=\"assunto\" required data-validation-required-message=\"Insira o assunto aqui\" maxlength=\"40\" style=\"resize:none\"></textarea>
                </div>
            </div>
            <div class=\"control-group form-group\">
                <div class=\"controls\">
                    <label>Mensagem:</label>
                    <textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"mensagem\" required data-validation-required-message=\"Insira a mensagem aqui\" maxlength=\"999\" style=\"resize:none\"></textarea>
                </div>
            </div>
            <div id=\"success\"></div>

            <input type=\"submit\" class=\"btn btn-primary\" value=\"Enviar\">


        </form>
    </div>

</div>
    </div>

');
");

echo "Ok\n";

echo "### Inserindo os Dados da pagina SOBRE ###\n";

$conexao->query("INSERT INTO `curso_phpfoundation`.`paginas`
(`pagina`,`conteudo`)
VALUES ('sobre', '<div class=\"container\">

    <!-- Sobre-->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\"> Quem Somos
            </h1>
        </div>
    </div>

    <!-- Descrição -->
    <div class=\"row\">
        <div class=\"col-md-8\">
            <img class=\"img-responsive\"> <img src=\"imgsobre.jpg\">
        </div>
        <div class=\"col-md-4\">
            <br/>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique?
                Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta
                dolorem non blanditiis ex fugiat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum
                aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit
                dolorum!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa
                voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus
                perspiciatis quis?</p>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br>');
");

echo "Ok\n";

echo "### Inserindo os Dados da pagina PRODUTOS ###\n";

$conexao->query("INSERT INTO `curso_phpfoundation`.`paginas`
(`pagina`,`conteudo`)
VALUES ('produtos', '<div class=\"container\">

    <div class=\"col-lg-12\">
        <h2 class=\"page-header\">Produtos</h2>
    </div>

    <!-- Painel de Produtos-->
<div class=\"row\">

    <div class=\"col-md-3 col-sm-6\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-tree fa-stack-1x fa-inverse\"></i>
                        </span>
            </div>
            <div class=\"panel-body\">
                <h4>Maquiagem</h4>
                <p>Descrição aqui.</p>
                <a href=\"#\" class=\"btn btn-primary\">Leia mais</a>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 col-sm-6\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-car fa-stack-1x fa-inverse\"></i>
                        </span>
            </div>
            <div class=\"panel-body\">
                <h4>Perfumaria</h4>
                <p>Descrição aqui.</p>
                <a href=\"#\" class=\"btn btn-primary\">Leia mais</a>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 col-sm-6\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-support fa-stack-1x fa-inverse\"></i>
                        </span>
            </div>
            <div class=\"panel-body\">
                <h4>Cabelo</h4>
                <p>Descrição aqui.</p>
                <a href=\"#\" class=\"btn btn-primary\">Leia mais</a>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 col-sm-6\">
        <div class=\"panel panel-default text-center\">
            <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-database fa-stack-1x fa-inverse\"></i>
                        </span>
            </div>
            <div class=\"panel-body\">
                <h4>Corpo</h4>
                <p>Descrição aqui.</p>
                <a href=\"#\" class=\"btn btn-primary\">Leia mais</a>
            </div>
        </div>
    </div>
</div>

</div>
')");

echo "Ok\n";

echo "### Inserindo os Dados da pagina SERVIÇOS ###\n";

$conexao->query("INSERT INTO `curso_phpfoundation`.`paginas`
(`pagina`,`conteudo`)
VALUES ('servicos', '<div class=\"container\">
    <!-- Lista de Serviços -->

    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h2 class=\"page-header\">Trabalhamos com:</h2>
        </div>
        <br/>
        <div class=\"col-md-4\">
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-tree fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 1</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-car fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 2</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-support fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 3</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-database fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 4</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-bomb fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 5</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-bank fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 6</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-paper-plane fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 7</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-space-shuttle fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 8</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
            <div class=\"media\">
                <div class=\"pull-left\">
                        <span class=\"fa-stack fa-2x\">
                              <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                              <i class=\"fa fa-recycle fa-stack-1x fa-inverse\"></i>
                        </span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">Serviço 9</h4>
                    <p>Descrição aqui.</p>
                </div>
            </div>
        </div>
    </div>
')");
echo "Ok\n";

echo "### Inserindo os Dados da pagina CONTATO ###\n";

$conexao->query("INSERT INTO `curso_phpfoundation`.`paginas`
(`pagina`,`conteudo`)
VALUES ('contato','<div class=\"container\">

<!-- Endereço do Salão-->
<div class=\"col-md-4\">
    <h3>Contato</h3>
    <hr/>
    <p><i class=\"glyphicon glyphicon-home\"></i>
        <abbr title=\"Endereço\">Endereço</abbr>:São Pedro, Rua Horizonte<br>Itabuna - BA<br></p>
    </p>
    <p><i class=\"glyphicon glyphicon-earphone\"></i>
        <abbr title=\"Telefone\">Telefone</abbr>: (73)9136-2519</p>
    <p><i class=\"glyphicon-envelope\"></i>
        <abbr title=\"Email\">Email</abbr>: <a href=\"nome@exemplo.com\">blabla@gmail.com</a>
    </p>

</div>
</div>

<div class=\"container\">
    <div class=\"row\">
    <div class=\"col-md-8\">
        <h3>Agende um horário</h3><br/>

        <form name=\"Mensagem\" id=\"contactForm\" method=\"post\" >
            <div class=\"control-group form-group\">
                <div class=\"controls\">
                    <label>Nome:</label>
                    <input  type=\"text\" class=\"form-control\" name=\"nome\" required data-validation-required-message=\"Insira seu nome aqui.\">
                    <p class=\"help-block\"></p>
                </div>
            </div>
            <div class=\"control-group form-group\">
                <div class=\"controls\">
                    <label>Email:</label>
                    <input type=\"email\" class=\"form-control\" name=\"email\" required data-validation-required-message=\"Insira seu email aqui.\">
                </div>
            </div>
            <div class=\"control-group form-group\">
                <div class=\"controls\">
                    <label>Assunto:</label>
                    <textarea rows=\"3\" cols=\"10\" class=\"form-control\" name=\"assunto\" required data-validation-required-message=\"Insira o assunto aqui\" maxlength=\"40\" style=\"resize:none\"></textarea>
                </div>
            </div>
            <div class=\"control-group form-group\">
                <div class=\"controls\">
                    <label>Mensagem:</label>
                    <textarea rows=\"10\" cols=\"100\" class=\"form-control\" name=\"mensagem\" required data-validation-required-message=\"Insira a mensagem aqui\" maxlength=\"999\" style=\"resize:none\"></textarea>
                </div>
            </div>
            <div id=\"success\"></div>

            <input type=\"submit\" class=\"btn btn-primary\" value=\"Enviar\">


        </form>
    </div>

</div>
    </div>

 ')");



echo "Ok\n";

