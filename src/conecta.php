<?php

function con() {
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "projeto_factory";

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);

    // Verifica a conexão
    if (mysqli_connect_errno()) {
        die("ERRO: " . mysqli_connect_error());
    }

    return $conexao;
}
?>