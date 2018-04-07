<?php
//as variaveis digitadarecebe os dados digitado na pagina aonterior 

//conexão mysql
//Configura de acesso ao banco de dados
$conexao = new mysqli_connect("localhost", "root", "root", "bancodedados");

if(mysqli_connect_errno()){
    echo "Failed connect to mysq:". mysqli_connect_error();
    }
    
    return $conexao;
?>
