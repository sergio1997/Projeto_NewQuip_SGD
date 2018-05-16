<?php
include "../modelo/conexao.php";

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$apelido = filter_input(INPUT_POST,'apelido',FILTER_SANITIZE_STRING);
$nome_pai = filter_input(INPUT_POST,'nome_pai',FILTER_SANITIZE_STRING);
$nome_mae = filter_input(INPUT_POST,'nome_mae',FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST,'sexo',FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST,'cpd',FILTER_SANITIZE_NUMBER_INT);
$rg = filter_input(INPUT_POST,'rg',FILTER_SANITIZE_NUMBER_INT);
$orgao_emissor = filter_input(INPUT_POST,'orgao_emissor',FILTER_SANITIZE_STRING);
$emissao_rg = filter_input(INPUT_POST,'emissor_rg',FILTER_SANITIZE_NUMBER_INT);
$data_nascimento = filter_input(INPUT_POST,'data_nascimento',FILTER_SANITIZE_NUMBER_INT);
$escolaridade = filter_input(INPUT_POST,'escolaridade',FILTER_SANITIZE_STRING);
$cnh = filter_input(INPUT_POST,'cnh',FILTER_SANITIZE_STRING);
$numero_cnh= filter_input(INPUT_POST,'numero_cnh',FILTER_SANITIZE_NUMBER_INT);
$categoria_cnh= filter_input(INPUT_POST,'categoria_cnh',FILTER_SANITIZE_STRING);
$validade_cnh= filter_input(INPUT_POST,'validade_cnh',FILTER_SANITIZE_NUMBER_INT);
$cargo= filter_input(INPUT_POST,'cargo',FILTER_SANITIZE_STRING);
$setor= filter_input(INPUT_POST,'setor',FILTER_SANITIZE_STRING);
$salario_base= filter_input(INPUT_POST,'salario_base',FILTER_SANITIZE_NUMBER_FLOAT);
$complemento_salarial= filter_input(INPUT_POST,'complemento_salarial',FILTER_SANITIZE_NUMBER_FLOAT);
$salario_carteira= filter_input(INPUT_POST,'salario_carteira',FILTER_SANITIZE_NUMBER_FLOAT);
$salario_liquido= filter_input(INPUT_POST,'salario_liquido',FILTER_SANITIZE_NUMBER_FLOAT);
$NMcarteira_trabalho= filter_input(INPUT_POST,'NMcarteira_trabalho',FILTER_SANITIZE_NUMBER_INT);
$pis= filter_input(INPUT_POST,'pis',FILTER_SANITIZE_NUMBER_INT);
$data_admissao= filter_input(INPUT_POST,'data_admissao',FILTER_SANITIZE_NUMBER_INT);
$email= filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$senha= filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
$nivel= filter_input(INPUT_POST,'nivel',FILTER_SANITIZE_NUMBER_INT);
$endereco= filter_input(INPUT_POST,'endereco',FILTER_SANITIZE_STRING);
$complemento= filter_input(INPUT_POST,'complemento',FILTER_SANITIZE_STRING);
$numero= filter_input(INPUT_POST,'numero',FILTER_SANITIZE_NUMBER_INT);
$bairro= filter_input(INPUT_POST,'bairro',FILTER_SANITIZE_STRING);
$cep= filter_input(INPUT_POST,'cep',FILTER_SANITIZE_NUMBER_INT);
$telefone= filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_NUMBER_INT);
$celular= filter_input(INPUT_POST,'celular',FILTER_SANITIZE_NUMBER_INT);
$uf= filter_input(INPUT_POST,'uf',FILTER_SANITIZE_STRING);
$cidade= filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);
$estado= filter_input(INPUT_POST,'estado',FILTER_SANITIZE_STRING);


$sql = "INSERT  INTO funcionario ( Nome,apelido,nomePai,nomeMae,sexo,cpf,rg,orgaoEmissor,EmissaoRg,dataNascimento,escolaridade,cnh,numeroCnh,categoriaCnh,ValidadeCnh,cargo,salarioBase,complementoSalarial,SalarioCarteira,SalarioLiquido,NMcarteiraTrabalho,pis,dataAdmissao,email,senha,nivel,endereco,complemento,numero,bairro,cep,telefone,celular,uf,cidade,estado)"
. "VALUES('$nome','$apelido','$nome_pai','$nome_mae','$sexo','$cpf','$rg','$orgao_emissor','$emissao_rg','$data_nascimento','$escolaridade','$cnh','$numero_cnh','$categoria_cnh','$validade_cnh','$cargo','$salario_base','$complemento_salarial','$salario_carteira','$salario_liquido','$NMcarteira_trabalho',$pis,'$data_admissao','$email','$senha','$nivel','$endereco','$complemento','$numero','$bairro','$cep','$telefone','$celular','$uf','$cidade','$estado')"; // A instrução delete irá apagar todos os dados da id recebida
mysqli_query($conexao, $sql);

//$exibe = @mysqli_fetch_assoc($sql);

//seleciona a tabela para pegar o id 
//$query = @mysqli_query("SELECT * FROM funcionario WHERE Nome='$nome' AND email='$email' AND senha= '$senha'");

//$exibe1 = @mysqli_fetch_assoc($query);
//$id = $exibe1['id'];

//seleciona a tabela setor
//$query1 = @mysqli_query("SELECT * FROM setor WHERE nome_setor='$setor'");
//$exibe2 = @mysqli_fetch_assoc($query1);
//$id_setor = $exibe2['id_setor'];



//insere os dados na tabela codigo setor
//$query2 = @mysqli_query("INSERT INTO codigo_setor (id_setor,id)VALUES('$id_setor','$id') ")
?>
<?PHP

header('location:../visao/cadastrarFuncionario.php');
?>


