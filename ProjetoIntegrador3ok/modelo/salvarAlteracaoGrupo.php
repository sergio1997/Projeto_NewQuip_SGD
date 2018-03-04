<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
</head>
<body>
<?php 



 // esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php. 
 session_start();
 
 
 if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { 
 unset($_SESSION['email']);
 unset($_SESSION['senha']); 
 header('location:index.php');
  
 }
 //grava a sessão dos dados do usario logando atarvs de uma sessão 
 $logado = $_SESSION['email'];
 
 echo $logado;
 
$id_setor=$_POST['id_setor'];
 $nome_setor=$_POST['nome_setor'];

 //lista os dados do banco apenas do usario que esta logado no sistema 
 
 ?>
<?PHP

		include "../modelo/conexao.php ";
?>
<?php 
//recuperando os dados 






//daos do login

//inserindo dados no banco
$sql= @mysql_query("UPDATE  setor SET nome_setor='$nome_setor' WHERE id_setor='$id_setor'" );

 echo"alert('Dados de acesso alterado com sucesso!!');";
?>
<?PHP
  header('location:../visao/ListaGrupo.php');
?>
</body>
</html>