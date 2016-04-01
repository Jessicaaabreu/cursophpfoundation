<div class="container">
    <div class="row">
    <div class="col-md-8">
        <h3>Agende um horário</h3><br/>
        <?php

        $focus = "";

        if(isset($_POST['nome'])) {
            $focus = "autofocus";
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $assunto = $_POST['assunto'];
            $mensagem = $_POST['mensagem'];

            echo "<p class='alert alert-success'>";  // cria uma caixa de mensagem de sucesso do bootstrap
            echo "<b>Mensagem enviada com sucesso! </b><br/>";
            echo "Nome: " . $nome . "<br/>";
            echo "Email: " . $email . "<br/>";
            echo "Assunto: " . $assunto . "<br/>";
            echo "Mensagem: " . $mensagem . "<br/>";
            echo "</p>";
        }  ?>

        <form name="Mensagem" id="contactForm" method="post" >
            <div class="control-group form-group">
                <div class="controls">
                    <label>Nome:</label>
                    <input <?php echo $focus ?> type="text" class="form-control" name="nome" required data-validation-required-message="Insira seu nome aqui.">
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email" required data-validation-required-message="Insira seu email aqui.">
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Assunto:</label>
                    <textarea rows="3" cols="10" class="form-control" name="assunto" required data-validation-required-message="Insira o assunto aqui" maxlength="40" style="resize:none"></textarea>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Mensagem:</label>
                    <textarea rows="10" cols="100" class="form-control" name="mensagem" required data-validation-required-message="Insira a mensagem aqui" maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <div id="success"></div>

            <input type="submit" class="btn btn-primary" value="Enviar">


        </form>
    </div>

</div>
    </div>



