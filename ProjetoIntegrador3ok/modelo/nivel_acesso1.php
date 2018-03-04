<!DOCTYPE>

<?php
// include "../visao/modelo/conexao.php";

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
 
 ?>

<html>
<head>
	<title>Pagina Restrita</title>

	<script type= "text/javascript">
//função para redirecionar para outra pagina apos 5 segudos 
//caso aultentique ou não 
function loginfailed(){
  
  setTimeout("window.location='../visao/pagina_inicial.php'");
  
  alert('Pagina Reestrita');
}
</script>
</head>
</head>
<body>
   
    <?php

 $sql1= @mysql_query("SELECT * FROM  funcionario WHERE email='$_SESSION[email]'");
  
  $exibe1 = @mysql_fetch_assoc($sql1);
     
       $nivel= $exibe1['nivel'];

   
    $nivel_acesso=1;
    $nivel_acesso1=3;


if($nivel == $nivel_acesso){
    echo "<script>loginfailed()</script>";
   
}elseif($nivel== $nivel_acesso1){
   echo "<script>loginfailed()</script>";
 }


?>

</body>
</html>