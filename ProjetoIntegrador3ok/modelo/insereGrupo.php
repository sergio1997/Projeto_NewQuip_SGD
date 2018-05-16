<?PHP
include "../modelo/conexao.php";
?>
<?php
$nomeSetor =filter_input(INPUT_POST, 'nomeSetor', FILTER_SANITIZE_STRING);
// echo "nomeSetor: $nomeSetor";
//$nomeSetor = $_POS['nomeSetor'];
$sqlInsere = "INSERT INTO setor (nome_setor) VALUES ('$nomeSetor')";
mysqli_query($conexao, $sqlInsere);

//INSERT INTO ClientesCidades (NomeCliente, CidadeCliente, CredCliente) SELECT cc_nome, cc_cidade, cc_cred FROM CliCred WHERE cc_cred > 300;
header('location:../visao/cadastraGrupo.php');
?>
<html>
    <head>
    <html>
        <head>
            <title>Resultado</title>

        </head>
        <body>

        </body>
    </html>