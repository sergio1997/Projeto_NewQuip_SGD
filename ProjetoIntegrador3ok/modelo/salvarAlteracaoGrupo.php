<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
include ("../modelo/conexao.php"); 
include ("../modelo/iniciarsessao.php"); 
echo $logado;
$id_setor=$_POST['id_setor'];
 $nome_setor=$_POST['nm_setor'];

 //lista os dados do banco apenas do usario que esta logado no sistema 
 
?>
<?php 


//daos do login

//inserindo dados no banco
$sql="UPDATE  setor SET id_setor='$id_setor' WHERE  nm_setor='$nome_setor";

 echo"alert('Dados de acesso alterado com sucesso!!');";
?>
<?PHP
  header('location:../visao/listaGrupo.php');
?>
</body>
</html>