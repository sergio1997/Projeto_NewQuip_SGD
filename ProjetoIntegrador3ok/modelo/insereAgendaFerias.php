<?php 

include "../modelo/conexao.php";

$nomeFuncionario=$_POST['funcionario'];
$dataInicio=$_POST['dataInicio'];
$dataFinal= $_POST['dataFinal'];

$query = sprintf("SELECT * FROM funcionario WHERE Nome='$nomeFuncionario'");
// executa a query
$dados = mysqli_query($query, $conexao) or die(mysqli_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);

$id= $linha['id'];

echo "$id";

$query1= @mysqli_query("INSERT INTO ferias (dataInicialFerias,dataFinalFerias)VALUES ('$dataInicio','$dataFinal')");

$query2 = sprintf("SELECT * FROM ferias WHERE dataInicialFerias='$dataInicio' AND dataFinalFerias='$dataFinal'");
// executa a query
$dados2 = mysqli_query($query2, $conexao) or die(mysqli_error());
// transforma os dados em um array
$linha2 = mysqli_fetch_assoc($dados2);

$id_ferias= $linha2['id_ferias'];

echo "$id_ferias";

$query3=@mysqli_query("INSERT INTO registraferias (id_ferias,id)VALUES('$id_ferias','$id')");

header("Location: ../visao/agedarFerias.php");

?>
