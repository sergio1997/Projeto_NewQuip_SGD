<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
</head>
<body>
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
 
 
 
 //lista os dados do banco apenas do usario que esta logado no sistema 
 

	
	
	
 
	
	
 ?>
<?php


		include "../modelo/conexao.php ";
		
		
//recuperando os dados
$id=$_POST['id'];
$nome=$_POST['nome'];
$apelido=$_POST['apelido'];
$nome_pai=$_POST['nome_pai'];
$nome_mae=$_POST['nome_mae'];
$sexo=$_POST['sexo'];
$cpf=$_POST['cpf'];
$rg=$_POST['rg'];
$orgao_emissor=$_POST['orgao_emissor'];
$emissao_rg=$_POST['emissao_rg'];
$data_nascimento=$_POST['data_nascimento'];
$escolaridade=$_POST['escolaridade'];
$cnh=$_POST['cnh'];
$numero_cnh=$_POST['numero_cnh'];
$categoria_cnh=$_POST['categoria_cnh'];
$validade_cnh=$_POST['validade_cnh'];
$cargo=$_POST['cargo'];
$setor=$_POST['setor'];
$salario_base=$_POST['salario_base'];
$complemento_salarial=$_POST['complemento_salarial'];
$salario_carteira=$_POST['salario_carteira'];
$salario_liquido=$_POST['salario_liquido'];
$NMcarteira_trabalho=$_POST['NMcarteira_trabalho'];
$pis=$_POST['pis'];
$data_admissao=$_POST['data_admissao'];
//$email=$_POST['email'];
//$senha=$_POST['senha'];
//$nivel=$_POST['nivel'];
$endereco=$_POST['endereco'];
$complemento=$_POST['complemento'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$cep=$_POST['cep'];
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];
$uf=$_POST['uf'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];





//inserindo dados no banco
$sql= @mysql_query("UPDATE  funcionario SET Nome='$nome',apelido='$apelido',nomePai='$nome_pai',nomeMae='$nome_mae',sexo='$sexo',cpf='$cpf',rg='$rg',orgaoEmissor='$orgao_emissor',EmissaoRg='$emissao_rg',dataNascimento='$data_nascimento',escolaridade='$escolaridade',cnh='$cnh',numeroCnh='$numero_cnh',categoriaCnh='$categoria_cnh',ValidadeCnh='$validade_cnh',cargo='$cargo',salarioBase='$salario_base',complementoSalarial='$complemento_salarial',SalarioCarteira='$salario_carteira',SalarioLiquido='$salario_liquido',NMcarteiraTrabalho='$NMcarteira_trabalho',pis='$pis',dataAdmissao='$data_admissao',endereco='$endereco',complemento='$complemento',numero='$numero',bairro='$bairro',cep='$cep',telefone='$telefone',celular='$celular',uf='$uf',cidade='$cidade',estado='$estado' WHERE id=$id");



$sql2=@mysql_query("SELECT * FROM setor WHERE nome_setor='$setor'");

$linha = @mysql_fetch_assoc($sql2);

$id_setor=$linha['id_setor'];




$sql1=@mysql_query("UPDATE codigo_setor SET id_setor='$id_setor' WHERE id='$id'");

 echo"alert('dados alterado com sucesso!!');";
?>
<?PHP 
  header('location:../visao/Funcionario.php');
?>
</body>
</html>