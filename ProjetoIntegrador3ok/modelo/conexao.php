<?php

//Configura de acesso ao banco de dados
//conexão
$conexao = new mysqli("localhost", "root", "root", "projeto");
if (mysqli_connect_errno()) {
    echo "Failed connect to mysq:" . mysqli_connect_error();
}

return $conexao;
?>
