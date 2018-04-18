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
 

	
 ?>
<?php



		include "../modelo/conexao.php ";


		$questao1=$_POST['questao1'];
		$questao2=$_POST['questao2'];
		$questao3=$_POST['questao3'];
		$questao4=$_POST['questao4'];
		$questao5=$_POST['questao5'];
		$questao6=$_POST['questao6'];
		$questao7=$_POST['questao7'];
		$questao8=$_POST['questao8'];
		$questao9=$_POST['questao9'];
		$questao10=$_POST['questao10'];
		$questao11=$_POST['questao11'];
		$questao12=$_POST['questao12'];
		$questao13=$_POST['questao13'];
		$questao14=$_POST['questao14'];
		$questao15=$_POST['questao15'];


		$sql= @mysql_query("INSERT INTO formulario2 (questao1,questao2,questao3,questao4,questao5,questao6,questao7,questao8,questao9,questao10,questao11,questao12,questao13,questao14,questao15)VALUES('$questao1','$questao2','$questao3','$questao4','$questao5','$questao6','$questao7','$questao8','$questao9','$questao10','$questao11','$questao12','$questao13','$questao14','$questao15')");



?>
<?PHP 
header('location:../visao/CadastrarFuncionario.php');
?>


