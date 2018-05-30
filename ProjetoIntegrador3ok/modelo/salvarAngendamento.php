<?PHP
include "../modelo/conexao.php";
?>
<html>
    <head>
        <title>Rsultado</title>
        <script type= "text/javascript">
            //função para redirecionar para outra pagina apos 5 segudos 
            //caso aultentique ou não 
            function loginsuccessfully() {

                setTimeout("window.location='../visao/agendarTarefa.php'");
                alert('Agenda salvo com sucesso!!');

            }
            function loginfailed() {

                setTimeout("window.location='../visao/agendartarefa.php'");

                alert('grupo que voce digitou não exite');
            }
        </script>
    </head>
    <body>
        <?php
        $setor = $_POST['grupo'];
        $tarefas = $_POST['tarefas'];
        $tarefasfazer = $_POST['tarefasfazer'];
        $datainicio = $_POST['datainicio'];
        $horainicio = $_POST['horainicio'];
        $dataterminio = $_POST['dataterminio'];
        $horaterminio = $_POST['horaterminio'];
        $estimativadata = $_POST['estimativadata'];
        $estimativahora = $_POST['estimativahora'];
        $produtividade = $_POST['produtividade'];

   
$sql= @mysqli_query("SELECT * FROM funcionario WHERE Nome='$funcionario'");

$row = @mysqli_num_rows($sql);

	while($linha = mysqli_fetch_array($sql)){
		
		$id=$linha['id'];
		 
	
        
	     
	}
	 $sqlinsere=  @mysqli_query("INSERT INTO tarefa(data,descricao,dataTerminio,tarefa,obs,produtividade,horaInico,horaFinal) Values('$datainicio','$descricao','$dataterminio','$tarefas','$obs','$produtividade','$horainicio','$horaterminio')");

	 $query1=@mysqli_query("SELECT * FROM tarefa WHERE data='$datainicio' AND descricao='$descricao' AND dataTerminio='$dataterminio' AND obs='$obs' AND produtividade='$produtividade'");

	 $linha1= @mysqli_fetch_assoc($query1);



$query2= @mysqli_query("INSERT INTO agendatarefa (id_tarefa,id)Values('$id_tarefa','$id')");

	 
	 
	 
 
 header('location:../visao/listartarefas.php');
?>
