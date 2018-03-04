<?php 

 include "../modelo/conexao.php ";


$id=$_GET['id'];

$query= @mysql_query("SELECT * FROM faltas INNER JOIN codigo_faltas ON faltas.id_falta=codigo_faltas.id_faltas  WHERE faltas.id_falta='$id'");


$linha = @mysql_fetch_assoc($query);
 $id_falta=$linha['id_faltas'];
 $id_codigo=$linha['id_codigo'];




 $query1= @mysql_query("DELETE FROM faltas  WHERE id_falta='$id_falta'");
 $query2= @mysql_query("DELETE FROM codigo_faltas  WHERE id_codigo='$id_codigo'");


header("Location: ../visao/ListaGrupo.php");


?>