<?php

include_once 'db_connect.php';

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>System Car</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js">defer</script>
  <script src="../js/materialize.js">defer</script>
  <script src="../js/init.js">defer</script>
  
</head>
<body>
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br /><br />
        <div class="row center">
            <img src="../assets/imagens/SYSTEMCARLOGONAV.png" width="300px" />
            <div class="col s12 n12 l12 xl12">
                <h2 class="light">RELATÓRIOS</h2>
                <?php 
                if(isset($_POST['btn-relatorio'])):
                    $marcaselecionada = $_POST['marcaselecionada'];
                endif;
                ?>
                <h4><?php echo $marcaselecionada; ?></h4>
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
                        if(isset($_POST['btn-relatorio'])):
                            if($marcaselecionada == "Todas as marcas"):
                                $sql = "SELECT * FROM tb_carro ORDER BY marca,modelo,ano";
                            else:
                                $sql = "SELECT * FROM tb_carro WHERE marca='$marcaselecionada' ORDER BY marca,modelo,ano";
                            endif;
                        endif;
                    
                   
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
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>