<?php
include_once 'includes/header.php';
?>


<div class="section no-pad-bot" id="index-banner">
<div class="container">
  <br><br>
  <div class="col s12 m12 l12 xl12">
    <h2 id="title">ADICIONAR CARRO</h2>
        <form action="php_action/create.php" method="POST">
            <div class="input-field" col s12 m4>
                <input type="text" name="marca" id="marca">
                <label for="marca">Marca</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="modelo" id="modelo">
                <label for="modelo">Modelo</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="ano" id="ano">
                <label for="ano">Ano</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="cor" id="cor">
                <label for="cor">Cor</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="placa" id="placa">
                <label for="placa">Placa</label>
            </div>
            <div class="input-field" col s12 m4>
                <input type="text" name="valor" id="valor">
                <label for="valor">Valor</label>
            </div>
            <div class="input-field" col s12>
                <input type="text" name="estado" id="estado">
                <label for="estado">Estado</label>
            </div>
            <div class="row center">
                 <button type="submit" name="btn-adicionar" class="btn-large" id="download-button">ADICIONAR
                 </button>          
            </div>
        </form>
  </div>
  <br><br>

  <?php
include_once 'includes/footer.php';
?>
</body>
</html>

