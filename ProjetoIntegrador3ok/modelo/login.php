
<html>
<head>
<title>SGD</title>

</head>

<script type= "text/javascript">
//função para redirecionar para outra pagina apos 5 segudos 
//caso aultentique ou não 
function loginsuccessfully(){
	
	setTimeout("window.location='../visao/pagina_inicial.php'");
	
	
}
function loginfailed(){
	
	setTimeout("window.location='../'");
	
	alert('email ou senha invalida');
}
</script>


<body class="hold-transition skin-blue layout-top-nav">
	

		<?PHP

		include "../modelo/conexao.php";
?>


<?php
$login = $_POST['email'];
$senha = $_POST['senha'];

//Comando SQL de verificação de autenticação

$sql1 = "SELECT *
FROM login
WHERE email_orgn = '$login'
AND hash = '$senha'";


$resultado1 = mysqli_query($conexao, $sql1) or die ("Erro na seleção da tabela.");
 
	if (mysqli_num_rows($resultado1)>0) {
  # code...

  @session_start();


    
    $_SESSION['email'] = $login;
    $_SESSION['senha'] = $senha;
    

     echo "<script>loginsuccessfully()</script>";
  # code...

}

//Caso contrário redireciona para a página de autenticação
else {
	
    //Destrói
    @session_destroy();
 
 
    //Limpa
    
 
    //Redireciona para a página de autenticação
	echo "<script>loginfailed()</script>";
    
     
}
?>
   
        


</body>

</html>