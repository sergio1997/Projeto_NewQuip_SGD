<?php

//Configura de acesso ao banco de dados
//conexão
$conexao = new mysqli("localhost", "root", "root", "bancodedados2");
if (mysqli_connect_errno()) {
    echo "Failed connect to mysq:" . mysqli_connect_error();
}

return $conexao;
?>
