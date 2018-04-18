<?php



		include "../modelo/conexao.php ";


$id = $_GET['id']; // Recebendo o valor enviado pelo link


//$sql= @mysql_query("SELECT * FROM codigo_setor WHERE id='$id'");

//$exibe= @mysql_fetch_assoc($sql);
//$id_setor=$exibe['id_setor'];


//echo "$id_setor";



$sql1= @mysql_query("DELETE FROM funcionario WHERE id='".$id."'"); // A instrução delete irá apagar todos os dados da id recebida

$sql2=@mysql_query("DELETE FROM codigo_setor WHERE id='$id'");

header("Location: ../visao/Funcionario.php")
?>