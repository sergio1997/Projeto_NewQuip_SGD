<?php
include "../modelo/conexao.php";
$id = $_GET['id']; // Recebendo o valor enviado pelo link
@mysqli_query("DELETE FROM treinamento WHERE id_treinamento='" . $id . "'"); // A instrução delete irá apagar todos os dados da id recebida
header("Location: ../visao/listarTreinamento.php")
?>