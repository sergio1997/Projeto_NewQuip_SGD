<?PHP
include "../modelo/conexao.php";
?>
<?php
$nomeSetor = $_POST['nomeSetor'];
// echo "nomeSetor: $nomeSetor";
//$nomeSetor = $_POS['nomeSetor'];
$sqlInsere = "INSERT INTO setor (nm_setor) VALUES ('$nomeSetor')";
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