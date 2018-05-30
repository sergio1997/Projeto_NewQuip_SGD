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
        $tarefas = $_POST['tarefas'];
        $datainicio = $_POST['datainicio'];
        $horainicio = $_POST['horainicio'];
         
//$sql = "SELECT * FROM funcionario WHERE nome='$funcionario'";

//$row = mysqli_num_rows($sql);

//	while($linha = mysqli_fetch_array($sql)){
		
//		$id=$linha['id_funcionario'];    
	     //	}
	 $sqlinsere= "INSERT INTO tarefa(tarefa,dt_inicio,hr_inicio) Values ($tarefas','$datainicio','$horainicio')";
         mysqli_query($conexao, $sqlinsere);
	 //$query1 = "SELECT * FROM tarefa WHERE tarefa='$tarefas' AND dt_inicio='$datainicio' AND hr_inicio='$horainicio'";

	// $linha1= mysqli_fetch_assoc($query1);



//$query2= "INSERT INTO agendatarefa (id_agen_tarefa,id_funcionario)Values('$id_tarefa','$id')";

	 
	 
	 
 
 header('location:../visao/listartarefas.php');
?>
