
		<?PHP

		include "conexao.php";
?>
<html>
<head>
<title>Rsultado</title>

<script type= "text/javascript">
//função para redirecionar para outra pagina apos 5 segudos 
//caso aultentique ou não 
function loginsuccessfully(){
	
	setTimeout("window.location='../visao/Agendar.php'");
	alert('Agenda salvo com sucesso!!');
	
}
function loginfailed(){
	
	setTimeout("window.location='../visao/Agendar.php'");
	
	alert('grupo que voce digitou não exite');
}
</script>
</head>
<body>
<?php

$funcionario=$_POST['nome'];
$evolucao=$_POST['evolucao'];
$desempenho=$_POST['desempenho'];
$observacoes=$_POST['observacoes'];



$sql= @mysql_query("SELECT * FROM funcionario WHERE Nome LIKE '%".$funcionario."%'");

$row = @mysql_num_rows($sql);

if($row >0){
	while($linha = mysql_fetch_array($sql)){
		
		$nome=$linha['Nome'];

		
        
	     echo "$nome";
        
	}
	 $sqlinsere=  @mysql_query("INSERT INTO treinamento(nome,evolucao,desempenho,observacoes)VALUES('$nome','$evolucao','$desempenho','$observacoes')");
	 
	 
	 
   echo "<script>loginsuccessfully()</script>";
}else{
	
	echo "<script>loginfailed()</script>";
	
}
 

?>
