<html>
<head>
</head>

<body>
<?PHP

		include "../modelo/conexao.php ";
?>
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
 
 
 
 
 //lista os dados do banco apenas do usario que esta logado no sistema 
 
  $sql= @mysql_query("DELETE FROM cadastro WHERE email='$_SESSION[email]'");
	 
	session_destroy();
	header("Location: ../visao/index.php")
 ?>
 


</body>
</html>