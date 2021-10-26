<?php

session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-adicionar'])):
    $marca = mysqli_escape_string($connect, $_POST['marca']);
    $modelo = mysqli_escape_string($connect, $_POST['modelo']);
    $ano = mysqli_escape_string($connect, $_POST['ano']);
    $cor = mysqli_escape_string($connect, $_POST['cor']);
    $placa = mysqli_escape_string($connect, $_POST['placa']);
    $valor = mysqli_escape_string($connect, $_POST['valor']);
    $estado = mysqli_escape_string($connect, $_POST['estado']);

    $sql = "INSERT INTO tb_carro (marca, modelo, ano, cor, 
    placa, valor, estado) VALUES('$marca', '$modelo', '$ano', '$cor', '$placa', '$valor', '$estado')";

    if(mysqli_query($connect, $sql)):
        header('Location: ../consultar.php?sucesso');
    else:
        header('Location: ../consultar.php?erro');
    endif;
endif;
