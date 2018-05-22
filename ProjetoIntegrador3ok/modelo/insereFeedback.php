<?php 
include "../modelo/conexao.php";

$titulo=$_POST['titulo'];
$nome=$_POST['nome'];
$assunto=$_POST['assunto'];

$query= @mysqli_query("INSERT INTO feedback (titulo,nome,resposta)VALUES('$titulo','$nome','$assunto')");

header('location:../visao/responderfeedback.php');
?>