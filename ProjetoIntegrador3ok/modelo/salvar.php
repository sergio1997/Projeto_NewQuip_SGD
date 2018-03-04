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
 
 //lista os dados do banco apenas do usario que esta logado no sistema 
 
  $sql= @mysql_query("SELECT * FROM  cadastro WHERE email='$_SESSION[email]'");
	
	$exibe = @mysql_fetch_assoc($sql);
	
	
	
 
	
	
 ?>
<?PHP

		include "../modelo/conexao.php ";
?>
<?php 
//recuperando os dados 
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$rg=$_POST['rg'];
$data_nascimento=$_POST['data'];
$profissao=$_POST['profissao'];
$uf=$_POST['uf'];
$cep=$_POST['cep'];
$cidade=$_POST['cidade'];
$bairro=$_POST['bairro'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$telefone=$_POST['telefone'];



//daos do login

//inserindo dados no banco
$sql= @mysql_query("UPDATE  cadastro SET nome='$nome',cpf='$cpf',indentidade='$rg',data_nascimento='$data_nascimento',profissao='$profissao',uf='$uf',cep='$cep',cidade='$cidade',bairro='$bairro',rua='$rua',numero='$numero',telefone='$telefone' WHERE email='$_SESSION[email]'" );

 echo"alert('dados alterado com sucesso!!');";
?>
<?PHP 
  header('location:../visao/AlterarDados.php');
?>
</body>
</html>