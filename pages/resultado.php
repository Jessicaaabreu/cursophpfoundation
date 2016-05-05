<?php
require_once 'conexao.php';

$busca = $_GET['busca'];
$sql= "select * from paginas where conteudo like '%".$busca."%';";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="container">
    <br/>

 <h2>Resultado para a busca: <?php echo $busca ?></h2>
    <?php
    if($resultado){
        echo "<br/><ul>";
        foreach($resultado as $item){
            echo "<li>Página: <a href='".$item['pagina']."'>".$item['pagina']."</a></li>";
        }
        echo "</ul>";
    }else{
    echo "Não encontramos registros de acordo com o termo pesquisado.Por favor tente outro termo.!";
    }
?>




</div>



