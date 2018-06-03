<?php
include "../modelo/conexao.php";
$id = $_GET['id']; // Recebendo o valor enviado pelo link

$quere = mysqli_query($conexao,"DELETE FROM setor WHERE id_setor='" . $id . "'"); // A instrução delete irá apagar todos os dados da id recebida

header("Location: ../visao/listaGrupo.php")
?>