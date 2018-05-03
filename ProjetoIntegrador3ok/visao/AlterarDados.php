<?PHP
    include "../modelo/conexao.php";
?>
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
<script language="javascript1.2">
function soLetras(e){
if (document.all){var evt=event.keyCode;}
else{var evt = e.charCode;}
var chr = String.fromCharCode(evt);
//	var re = /[A-Za-z]/; // permite apenas de A-Z e de a-z
var re = /[A-Za-z\s-ÃÕÑÁÉÍÓÚÀÜÇãõñáéíóúàçü]/; // permite de A-Z, a-z, espaços,
// hífens e caracteres acentuados. Mais caracteres podem ser adicionados a Lista
return (re.test(chr) || evt<20); // com evt<20 permitimos <ENTER>,<TAB>,<BACKSPACE>
}
</script>
<script language="javascript1.2">
function soNumero(e){
if (document.all){var evt=event.keyCode;}
else{var evt = e.charCode;}
var chr = String.fromCharCode(evt);
//	var re = /[0-9/; // permite apenas numeros de 0-9;
var re = /[0-9]/; // permite numeros  de 0-9,
// hífens e caracteres acentuados. Mais caracteres podem ser adicionados a Lista
return (re.test(chr) || evt<20); 
}
</script>
 

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SGD</title>
  <!-- Parte responsiva -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Fontes usadas -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- icones -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- tema -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  
 <script language="Javascript">
  //alerta se deseja excluir ou não os dados
function confirmacao() {
     var resposta = confirm("Tem certeza que desejaremover seus dados?");
 
     if (resposta == true) {
          window.location.href="../modelo/ExcluirConta.php?nome=$exibe[nome]";
     }
}
</script>

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
?>
<div class="wrapper">

  <header class="main-header">

      <a href="index2.html" class="logo">

      <span class="logo-mini"><b>S</b>GD</span>
      <span class="logo-lg"><b>SGD</b></span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
              <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="pagina_inicial.php">Inicio</a></li>
            <li><a href="#">Suporte</a></li>
            <li><a href="#">Dúvidas</a></li>
            <li><a href="#">Contato</a></li>
			
			
			
          </ul>
        </div>
			  <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
			<li><a  " ><?php echo $logado ?></a></li>
            <li><a  href="../controle/logout.php" >» Logout</a></li>
            <li class="dropdown user user-menu">
              
              <ul class="dropdown-menu">
			  
			  
			  <div class="navbar-custom-menu">
				 
				<ul class="nav navbar-nav">
			
			
</nav>
  </header>
  <aside class="main-sidebar">

    <section class="sidebar">

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Procure...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
	  	  
      
      <ul class="sidebar-menu">
		  
        <li class="header">Menu</li>
        
        <li><a href="#"><i class="fa fa-link"></i> <span>Consultar Reunioes</span></a></li>
		
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Dados Pessoais</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            
			<li><a href="AlterarDados.php">Alterar Dados</a></li>
			<li><a href="AlterarDadosDeAcesso.php">Alterar Dados De Acesso</a></li>
            <li><a href="javascript:func()" onclick="confirmacao()">Excluir Dados</a></li>
			
			
          </ul>
        </li>
		
      </ul>
	  <ul class="sidebar-menu">
        
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Dados Funcionario</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="CadastrarFuncionario.php">Cadastar Funcionario</a></li>
			
            <li><a href="../visao/Funcionario.php">Lista Funcionario</a></li>
          </ul>
        </li>
      </ul>
	  <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Grupos</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/CadastraGrupo.php">Cadastrar Grupos</a></li>
			
            <li><a href="../visao/ListaGrupo.php">Listar Grupos</a></li>
          </ul>
        </li>
      </ul>
	   <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Reunioes</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/MarcarRuniao.php">Marcar Reuniao</a></li>
			
            <li><a href="../visao/listarReuniao.php">Listar Grupos</a></li>
          </ul>
        </li>
      </ul>
	   <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Agenda de tarefas</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/Agendar.php">Agendar Tarefa</a></li>
			
            <li><a href="../visao/listartarefas.php">Listar Tarefas</a></li>
          </ul>
        </li>
      </ul>
	   <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Treinamento</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/AdicionarTreinamento.php">Adicionar Funcionario</a></li>
			
            <li><a href="../visao/listarTreinamento.php">Lista treinamento</a></li>
          </ul>
        </li>
      </ul>
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Faltas</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/CadastraFaltas.php">cadastar falta</a></li>
      
            <li><a href="../visao/listarfaltas.php">Listar faltas</a></li>
          </ul>
        </li>
      </ul>

    </section>

  </aside>

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

<!-- Rodapé -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Versão</b> 0.9
      </div>
      <strong>Copyright &copy; 2018 <a href="#">NewQuip</a>.</strong> Todos os direitos reservados.
    </div>
  </footer>
  <!--Fim do Rodapé -->

<!--JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
</body>
</html>
