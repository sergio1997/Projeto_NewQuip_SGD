<?PHP

		include "../modelo/conexao.php ";
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

$setor=$_POST['grupo'];
$tarefas=$_POST['tarefas'];
$tarefasfazer=$_POST['tarefasfazer'];
$datainicio=$_POST['datainicio'];
$horainicio=$_POST['horainicio'];
$dataterminio=$_POST['dataterminio'];
$horaterminio=$_POST['horaterminio'];
$estimativadata=$_POST['estimativadata'];
$estimativahora=$_POST['estimativahora'];
$produtividade=$_POST['produtividade'];


$sql= @mysql_query("SELECT * FROM setor WHERE nome_setor LIKE '%".$setor."%'");

$row = @mysql_num_rows($sql);

if($row >0){
	while($linha = mysql_fetch_array($sql)){
		
		$nome=$linha['nome_setor'];
		 
		
        
	     
	}
	 $sqlinsere=  @mysql_query("INSERT INTO agendatarefa(grupo,usuarios,tarefa,tarefasfazer,datainicio,horainicio,dataterminio,horaterminio,estimativadata,estimativahora,produtividade)VALUES('$nome','$tarefas','$tarefasfazer','$datainicio','$horainicio','$dataterminio','$horaterminio','$estimativadata','$estimativahora','$produtividade')");
	 
	 
	 
  // echo "<script>loginsuccessfully()</script>";
}else{
	
	echo "<script>loginfailed()</script>";
	
}
 

?>
</body>
</html>