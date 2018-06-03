
<?php 
include ("../modelo/conexao.php"); 
include ("../modelo/iniciarsessao.php"); 
 
  $id_setor= $_GET['id'];
  $nm_setor= $_GET['nm_setor'];
  
//alterando dados no banco

$query=mysqli_query($conexao,"UPDATE  setor SET nm_setor='$nm_setor' WHERE id_setor='".$id_setor."'"); // A instrução delete irá apagar todos os dados da id recebida
 //echo"alert('Dados de acesso alterado com sucesso!!');";

  header('location:../visao/listaGrupo.php');
?>
