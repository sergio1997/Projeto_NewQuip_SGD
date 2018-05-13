<?PHP
include "../modelo/conexao.php";
?>
<?php
$nomeSetor = $_POST['nomeSetor'];
$sqlInsere = @mysqli_query("INSERT INTO setor(nome_setor)VALUES('$nomeSetor')");

//INSERT INTO ClientesCidades (NomeCliente, CidadeCliente, CredCliente) SELECT cc_nome, cc_cidade, cc_cred FROM CliCred WHERE cc_cred > 300;
header('location:../visao/cadastraGrupo.php');
?>
<html>
    <head>
    <html>
        <head>
            <title>Rsultado</title>

        </head>
        <body>

        </body>
    </html>