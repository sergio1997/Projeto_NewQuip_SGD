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


$Proatividade=$_POST['Proatividade'];
$Interesse=$_POST['Interesse'];
$Organizacao=$_POST['Organizacao'];
$Flexibilidade=$_POST['Flexibilidade'];
$Sociabilidade=$_POST['Sociabilidade'];
$Lideranca=$_POST['Lideranca'];
$Vocacao=$_POST['Vocacao'];
$Disponibilidade=$_POST['Disponibilidade'];
$Eficiencia=$_POST['Eficiencia'];
$Trabalho_equipe=$_POST['Trabalho_equipe'];


$sql=@mysql_query("INSERT INTO formulario1 (Proatividade,Interesse,Organizacao,Flexibilidade,Sociabilidade,Lideranca,Vocacao,Disponibilidade,Eficiencia,Trabalho_equipe)VALUES('$Proatividade','$Interesse','$Organizacao','$Flexibilidade','$Sociabilidade','$Lideranca','$Vocacao','$Disponibilidade','$Eficiencia','$Trabalho_equipe')");

?>
<?PHP 
 header('location:../visao/CadastrarFuncionario.php');
?>


