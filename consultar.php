<?php

include_once 'php_action/db_connect.php';

include_once 'includes/header.php';

?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br /><br />
        <div class="row center">
            <div class="col s12 n12 l12 xl12">
                <h3 class="light">ESTOQUE CARROS</h3>
                <table class="striped">
                    <thead>
                        <tr>
                            <th>MARCA</th>
                            <th>MODELO</th>
                            <th>ANO</th>
                            <th>COR</th>
                            <th>PLACA</th>
                            <th>VALOR</th>
                            <th>ESTADO</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM tb_carro";
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = mysqli_fetch_array($resultado)):
                        ?>
                            <tr>
                                <td><?php  echo $dados['marca'] ?></td>
                                <td><?php  echo $dados['modelo'] ?></td>
                                <td><?php  echo $dados['ano'] ?></td>
                                <td><?php  echo $dados['cor'] ?></td>
                                <td><?php  echo $dados['placa'] ?></td>
                                <td><?php  echo $dados['valor'] ?></td>
                                <td><?php  echo $dados['estado'] ?></td>

                                <td><a href="editar.php?id=<?php echo $dados['id']; ?>" 
                                class="btn-floating orange"><i class="material-icons">edit</i></td>
                                
                                <td><a href="#modal1<?php echo $dados['id']; ?>" class="btn-floating 
                                red modal-trigger"><i class="material-icons">delete</i></td>
                                 
                                <!-- Modal Structure -->
                                <div id="modal1<?php echo $dados['id']; ?>" class="modal modal-fixed-footer">
                                    <div class="modal-content">
                                         <h4>Você tem certeza que deseja excluir?</h4>
                                         <p>Da uma conferida se você quer excluir esses dados mesmo!<br /> <br />
                                         <?php  echo $dados['marca'] ?> - 
                                         <?php  echo $dados['modelo'] ?> - 
                                         <?php  echo $dados['ano'] ?> - 
                                         <?php  echo $dados['cor'] ?> - 
                                         <?php  echo $dados['placa'] ?> - 
                                         <?php  echo $dados['valor'] ?> - 
                                         <?php  echo $dados['estado'] ?> - </p>
                                     </div>

                                     <div class="modal-footer">
                                          <form action="php_action/delete.php" method="POST">
                                            <input type="hidden" name="id" value = "<?php  echo $dados['id'] ?>">
                                            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Não</a>
                                            <button type="submit" name="btn-deletar" class="btn-large" id="download-button">Sim
                                            </button>  
                                          </form>
                                     </div>
                                </div>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'includes/footer.php';
?>