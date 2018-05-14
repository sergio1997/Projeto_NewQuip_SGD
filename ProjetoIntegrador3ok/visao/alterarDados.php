<?php
    include "../modelo/conexao.php";
    include "../modelo/iniciarsessao.php";
    
  $sql= @mysqli_query("SELECT * FROM  cadastro WHERE email='$_SESSION[email]'");
	
        $exibe = @mysqli_fetch_assoc($sql);

        $nome= $exibe['nome'];
        $cpf= $exibe['cpf'];
        $rg=$exibe['indentidade'];
        $telefone=$exibe['telefone'];
        $data_nascimento=$exibe['data_nascimento'];
        $email=$exibe['email'];
        $senha=$exibe['senha'];
        $profissao=$exibe['profissao'];
        $rua=$exibe['rua'];
        $numero=$exibe['numero'];
        $bairro=$exibe['bairro'];
        $cidade=$exibe['cidade'];
        $cep=$exibe['cep'];
        $uf=$exibe['uf'];
 ?>
 

<!DOCTYPE html>
<html>
<head>
<script language="javascript">
<!-- chama a função (nomeform) -->
function valida_dados (nomeform)
{
    if (nomeform.nome.value=="")
    {
        alert ("Por favor digite o nome.");
        return false;
    }
	if (nomeform.cpf.value=="" )
    {
        alert ("Por favor digite seu CPF.");
        return false;
    }
	if (nomeform.rg.value=="")
    {
        alert ("Por favor digite seu RG.");
        return false;
    }
	if (nomeform.data.value=="")
    {
        alert ("Por favor digite sua Data de Nascimento.");
        return false;
    } 
	if (nomeform.profissao.value=="")
    {
        alert ("Por favor digite sua profissão.");
        return false;
    }
	if (nomeform.uf.value=="")
    {
        alert ("Por favor digite a UF.");
        return false;
    }
	if (nomeform.cep.value=="")
    {
        alert ("Por favor digite o CEP.");
        return false;
    }
		if (nomeform.cidade.value=="")
    {
        alert ("Por favor digite sua cidade.");
        return false;
    }
	if (nomeform.bairro.value=="")
    {
        alert ("Por favor digite o bairro.");
        return false;
    }
	if (nomeform.rua.value=="")
    {
        alert ("Por favor digite a rua .");
        return false;
    }
	if (nomeform.numero.value=="")
    {
        alert ("Por favor digite o numero da casa.");
        return false;
    }
	if (nomeform.telefone.value=="")
    {
        alert ("Por favor digite seu telefone pra contato.");
        return false;
    }
	
	
	
	alert("dados Alterado com sucesso!!");
	
	
	return true;
}
</script>
<?php 
include("linguagem.php"); 
include("cabecalho.php"); 
?>
<script type= "text/javascript">
//função para redirecionar para outra pagina apos 5 segudos 
//caso aultentique ou não 
function loginfailed(){
  
  setTimeout("window.location='../visao/pagina_inicial.php'");
  
  alert('Pagina Reestrita');
}
</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">

<?php

 $sql1= @mysqli_query("SELECT * FROM  funcionario WHERE email='$_SESSION[email]'");
  
  $exibe1 = @mysqli_fetch_assoc($sql1);
     
       $nivel= $exibe1['nivel'];

    echo "$nivel";
    $nivel_acesso2=3;
    $nivel_acesso=1;
    $nivel_acesso1=2;

if($nivel == $nivel_acesso){
    echo "<script>loginfailed()</script>";
   
}elseif($nivel== $nivel_acesso1){
   echo "<script>loginfailed()</script>";
 }elseif ($nivel==$nivel_acesso2) {
   echo "<script>loginfailed()</script>";
 }
 
 include("menu.php")
?>
  <div class="content-wrapper">
	    <section class="content-header">
      <h1>
      
      </h1>
    </section>
    <section class="content">

     
        <div class="container">

		  <h2 class="page-header">Alterar Cadastro</h2>

        <section class="invoice">
          <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">

      <div>
        <h3 class="box-title">Dados Pessoais</h3>
      </div>

     <div class="box-body">
              <div class="box-group" id="accordion">
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                    </h4>
</div>
    
    
      <form action="../modelo/salvar.php" method="post" name="f1" onSubmit="return valida_dados(this)">
      <div class="form-group has-feedback">
			    <b>Nome Completo<font color="#FF0000" >*</font></b> 
          <input type="text"  class="form-control"  maxlength="40" placeholder="ex: Jose Maria da silva" onKeypress='return soLetras(event)' value="<?php echo "$nome";?>"name="nome"/>
			</div>
<div class="form-group has-feedback">
          <b>CPF<font color="#FF0000" >*</font></b> 
          <input type="text" name="cpf" class="form-control" placeholder="ex: 99999999999" maxlength="11" onkeypress='return soNumero(event) ' value="<?php echo "$cpf";?>" readonly="readonly"/>			
      </div>
			
      <div class="form-group has-feedback">
          <b>RG<font color="#FF0000" >*</font></b> 
          <input type="text" name="rg" class="form-control" placeholder="ex: 99999999999"  maxlength="11"   onkeypress='return soNumero(event) ' value="<?php echo "$rg";?>" readonly="readonly"/>
      </div>

			<div class="form-group has-feedback">
          <b>Telefone<font color="#FF0000" >*</font></b> 
          <input type="text" name="telefone" class="form-control" placeholder="Ex:dd-99999-9999" maxlength="12"   onkeypress='return soNumero(event) '  value="<?php echo "$telefone";?>" />     
      </div>

			<div class="form-group has-feedback">
          <b>Data de nascimento<font color="#FF0000" >*</font></b> 
          <input type="date" name="data" class="form-control" placeholder="Data de nascimento" value="<?php echo "$data_nascimento"; ?>">			
      </div>
        <div class="form-group has-feedback">
          <b>Profissão<font color="#FF0000" >*</font></b> 
          <input type="text" name="profissao" class="form-control" placeholder="Profissão" maxlength="40"  onKeypress='return soLetras(event)' value="<?php echo "$profissao";?>">			
        </div> 
		  </div>
			</div>
			</div>
			<br>
      <div>
        <h3 class="box-title">Endereço</h3>
      </div>
      <div class="box-body">
              
      <div class="panel box box-primary">
                  
        <div class="form-group has-feedback">
          <b>Rua<font color="#FF0000" >*</font></b> 
          <input type="text" name="rua" class="form-control" placeholder="ex: Rua São Paulo" maxlength="40" onKeypress='return soLetras(event)' value="<?php echo"$rua";?>" />     
        </div> 

        <div class="form-group has-feedback">
          <b>Número<font color="#FF0000" >*</font></b> 
          <input type="text" name="numero" class="form-control" placeholder="ex: 31" maxlength="15"  onkeypress='return soNumero(event)' value="<?php echo "$numero";?>">     
        </div>

        <div class="form-group has-feedback">
          <b>Bairro<font color="#FF0000" >*</font></b> 
          <input type="text" name="bairro" class="form-control" placeholder="ex: Centro" maxlength="40" onKeypress='return soLetras(event)' value="<?php echo"$bairro";?>"/>     
        </div>

        <div class="form-group has-feedback">
           <b>Cidade<font color="#FF0000" >*</font></b> 
           <input type="text" name="cidade" class="form-control" placeholder="Ex: Juazeiro do Norde" maxlength="20"  onKeypress='return soLetras(event)' value="<?php echo"$cidade";?>" />     
        </div>

          <div class="form-group has-feedback">
           <b>CEP<font color="#FF0000" >*</font></b> 
           <input type="text" name="cep" class="form-control" placeholder="ex: 999999999" maxlength="9"  onkeypress='return soNumero(event)' value="<?php echo"$cep";?>" />     
        </div>

				<div class="form-group has-feedback">
			     <b>UF<font color="#FF0000" >*</font></b> 
           <input type="text" name="uf" class="form-control" placeholder="ex: CE" maxlength="2" style="text-transform:uppercase" onKeypress="return letras(event)" value="<?php echo"$uf";?>" />			
        </div>
			
			  <input type="submit" class="btn btn-primary" value="Alterar Cadastro" />
			  
			  </form>

 
  </div>

    <?php include("rodape.php")?>