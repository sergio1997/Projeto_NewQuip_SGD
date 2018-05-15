<?php

include "../modelo/iniciarsessao.php";
include "../modelo/conexao.php";

$nome = $_POST['nome'];
$apelido = $_POST['apelido'];
$nome_pai = $_POST['nome_pai'];
$nome_mae = $_POST['nome_mae'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$orgao_emissor = $_POST['orgao_emissor'];
$emissao_rg = $_POST['emissao_rg'];
$data_nascimento = $_POST['data_nascimento'];
$escolaridade = $_POST['escolaridade'];
$cnh = $_POST['cnh'];
$numero_cnh = $_POST['numero_cnh'];
$categoria_cnh = $_POST['categoria_cnh'];
$validade_cnh = $_POST['validade_cnh'];
$cargo = $_POST['cargo'];
$setor = $_POST['setor'];
$salario_base = $_POST['salario_base'];
$complemento_salarial = $_POST['complemento_salarial'];
$salario_carteira = $_POST['salario_carteira'];
$salario_liquido = $_POST['salario_liquido'];
$NMcarteira_trabalho = $_POST['NMcarteira_trabalho'];
$pis = $_POST['pis'];
$data_admissao = $_POST['data_admissao'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];
$endereco = $_POST['endereco'];
$complemento = $_POST['complemento'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$uf = $_POST['uf'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];


$sql = @mysqli_query("INSERT  INTO funcionario ( Nome,apelido,nomePai,nomeMae,sexo,cpf,rg,orgaoEmissor,EmissaoRg,dataNascimento,escolaridade,cnh,numeroCnh,categoriaCnh,ValidadeCnh,cargo,salarioBase,complementoSalarial,SalarioCarteira,SalarioLiquido,NMcarteiraTrabalho,pis,dataAdmissao,email,senha,nivel,endereco,complemento,numero,bairro,cep,telefone,celular,uf,cidade,estado)VALUES('$nome','$apelido','$nome_pai','$nome_mae','$sexo','$cpf','$rg','$orgao_emissor','$emissao_rg','$data_nascimento','$escolaridade','$cnh','$numero_cnh','$categoria_cnh','$validade_cnh','$cargo','$salario_base','$complemento_salarial','$salario_carteira','$salario_liquido','$NMcarteira_trabalho',$pis,'$data_admissao','$email','$senha','$nivel','$endereco','$complemento','$numero','$bairro','$cep','$telefone','$celular','$uf','$cidade','$estado')"); // A instrução delete irá apagar todos os dados da id recebida

$exibe = @mysqli_fetch_assoc($sql);

//seleciona a tabela para pegar o id 
$query = @mysqli_query("SELECT * FROM funcionario WHERE Nome='$nome' AND email='$email' AND senha= '$senha'");

$exibe1 = @mysqli_fetch_assoc($query);
$id = $exibe1['id'];

//seleciona a tabela setor
$query1 = @mysqli_query("SELECT * FROM setor WHERE nome_setor='$setor'");
$exibe2 = @mysqli_fetch_assoc($query1);
$id_setor = $exibe2['id_setor'];



//insere os dados na tabela codigo setor
$query2 = @mysqli_query("INSERT INTO codigo_setor (id_setor,id)VALUES('$id_setor','$id') ")
?>
<?PHP

header('location:../visao/cadastrarFuncionario.php');
?>


