<?php

include "../modelo/conexao.php ";
$id = $_GET['id']; // Recebendo o valor enviado pelo link

@mysql_query("DELETE FROM agendatarefa WHERE idagenda='".$id."'"); // A instrução delete irá apagar todos os dados da id recebida



header("Location: ../visao/listartarefas.php")
?>