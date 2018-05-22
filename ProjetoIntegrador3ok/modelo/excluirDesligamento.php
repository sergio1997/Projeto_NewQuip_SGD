<?php
include "../modelo/conexao.php";
$id_desligamento=$_GET['id'];
echo "$id_desligamento";
$query= @mysqli_query("DELETE FROM desligamento WHERE id_desligamento='$id_desligamento'");
header('location:../visao/listaDesligamento.php');
?>
