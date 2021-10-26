<?php

include_once 'php_action/db_connect.php';

include_once 'includes/header.php';

?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br /><br />
        <div class="row center">
            <div class="col s12 n12 l12 xl12">
                <h3 class="light">RELATÓRIOS</h3>
                <form action="php_action/report.php" target="_blank" method="POST">
                    <label for="">Selecione uma marca:</label>
                    <select name="marcaselecionada">
                        <option>Todas as marcas</option>
                        <?php 
                            $sql = "SELECT DISTINCT marca FROM tb_carro";
                            $resultado = mysqli_query($connect, $sql);
                            while($dados = mysqli_fetch_array($resultado)):
                         ?>
                         <option><?php echo $dados['marca']; ?></option>
                         <?php endwhile; ?>
                    </select>
                    <input type="submit" name="btn-relatorio" class="btn-large" value="Selecionar" id="download-button" />
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'includes/footer.php';
?>