
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
	
	setTimeout("window.location='../visao/ListaGrupo.php'");
	alert('Agenda salvo com sucesso!!');
	
}
function loginfailed(){
	
	setTimeout("window.location='../visao/ListaGrupo.php'");
	
	alert('grupo que voce digitou não exite');
}
</script>
</head>
<body>
<?php

$id_falta=$_POST['id'];
$data=$_POST['data'];
$motivo=$_POST['motivo'];




$sql= @mysql_query("SELECT * FROM faltas WHERE id_falta='$id_falta'");

$row = @mysql_num_rows($sql);

if($row >0){
	while($linha =@mysql_fetch_array($sql)){
		
		$id=$linha['id_falta'];

		
        
	    
        
	}

	





$query1= @mysql_query("UPDATE faltas SET data_falta='$data',motivo='$motivo' WHERE id_falta='$id_falta'");
//$query2=mysql_query("UPDATE codigo_faltas SET id='$id_funcionario' WHERE id_codigo='$idcodigo' ");
	


	 
	 
	 
  echo "<script>loginsuccessfully()</script>";
}else{
	
	echo "<script>loginfailed()</script>";
	
}
 

?>
</body>
</html>