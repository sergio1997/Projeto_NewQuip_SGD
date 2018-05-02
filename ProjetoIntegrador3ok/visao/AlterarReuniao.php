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
 

	
 ?>

<?php 



 // esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php. 
 @session_start();
 
 
 if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { 
 unset($_SESSION['email']);
 unset($_SESSION['senha']); 
 header('location:index.php');
  
 }
 //grava a sessão dos dados do usario logando atarvs de uma sessão 
 $logado = $_SESSION['email'];
 

	
 ?>
<?php

include "../modelo/conexao.php";

$id = $_GET['id']; // Recebendo o valor enviado pelo link

$sql=@mysqli_query("SELECT * FROM reuniao WHERE idreuniao='".$id."'"); // A instrução delete irá apagar todos os dados da id recebida

$exibe = @mysqli_fetch_assoc($sql);
       $idreuniao=$exibe['idreuniao'];
       $grupo= $exibe['grupo'];
       $data_reuniao= $exibe['data_reuniao'];
       $hora=$exibe['hora'];
       $assunto=$exibe['assunto'];


?>

<html>
    <head>
    
        <script language="javascript">
//chama a função (nomeform) -->
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
	
	
	
	
	alert("dados cadastrados com sucesso!!");
	
	
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
  <title>NewQuip</title>
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
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
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
            <li><a href="#">Ajuda</a></li>
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

       <ul class="sidebar-menu">
        <li class="header">Menu</li>



        <li class="treeview">
          <a href="#"><i class="fa fa-calendar-check-o"></i> <span>Agenda de tarefas</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/Agendar.php">Agendar Tarefa</a></li>

            <li><a href="../visao/listartarefas.php">Listar Tarefas</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-pencil"></i> <span>Avaliação</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/formulario1.php">Avaliação 1</a></li>
            <li><a href="../visao/formulario2.php">Avaliação 2</a></li>
            <li><a href="../visao/formulario3.php">Avaliação 3</a></li>
            <li><a href="../visao/informações.php">Informações da Avaliação</a></li>
          </ul>
        </li>

        

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>Funcionário</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="CadastrarFuncionario.php">Cadastar Funcionário</a></li>
            <li><a href="../visao/Funcionario.php">Lista Funcionário</a></li>
          </ul>
        </li>

       

        <li class="treeview">
          <a href="#"><i class="fa fa-comments"></i> <span>Reuniões</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            
            <li><a href="../visao/listarReuniao.php">Listar setores</a></li>
            <li><a href="../visao/MarcarRuniao.php">Marcar Reunião</a></li>
          </ul>
        </li>

         <li class="treeview">
          <a href="#"><i class="fa fa-group"></i> <span>Setores</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/CadastraGrupo.php">Cadastrar setor</a></li>
            <li><a href="../visao/ListaGrupo.php">Listar setores</a></li>
          </ul>
        </li>

        

        <li class="treeview">
          <a href="#"><i class="fa fa-graduation-cap"></i> <span>Treinamento</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/AdicionarTreinamento.php">Adicionar Funcionário</a></li>

            <li><a href="../visao/listarTreinamento.php">Lista treinamento</a></li>
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

		  <h2 class="page-header">Alterar Dados da Reuniao</h2>

        <section class="invoice">
          <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">

      <div>
        <h3 class="box-title">Dados da Reuniao</h3>
      </div>

     <div class="box-body">
              <div class="box-group" id="accordion">
                <div class="panel box box-primary">
                  <div class="box-header with-border">
                    <h4 class="box-title">
                    </h4>
</div>
    
    
      <form action="../modelo/salvaReuniao.php" method="post" name="f1" onSubmit="return valida_dados(this)">
      
	  <div class="form-group has-feedback">
        
        <b>ID da Reunião<font color="#FF0000" >*</font></b> 
          <input type="text"  class="form-control" name="idreuniao" maxlength="40" placeholder="ex: Jose Maria da silva" value="<?php echo "$idreuniao"?>" readonly="readonly"/>
			</div>
        <b>Nomo do Grupo<font color="#FF0000" >*</font></b> 
          <input type="text"  class="form-control" name="grupo" maxlength="40" placeholder="ex: Jose Maria da silva" value="<?php echo "$grupo"?>"/>
			</div>
		<div class="form-group has-feedback">
			    <b>Data da reunião<font color="#FF0000" >*</font></b> 
          <input type="date"  class="form-control" name="data" maxlength="40" value="<?php echo"$data_reuniao"?>" />
			</div>
<div class="form-group has-feedback">
			<b>Hora da reunião<font color="#FF0000" >*</font></b> 
          <input type="time"  class="form-control" name="hora" maxlength="40" value="<?php echo "$hora" ?>" />
			</div>
<div class="form-group has-feedback">
              <b>Assunto da reunião<font color="#FF0000" >*</font></b> 
              <textarea rows="4" cols="50" class="form-control" name="assunto" value="" ><?php echo "$assunto"; ?>
</textarea>
</div> 

			  <input type="submit" class="btn btn-primary" value="Marcar Runiao" />

			  </form>

 </selection>
  
 <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versão</b> 0.9
        </div>
        <strong>Copyright &copy; 2018 <a href="http://almsaeedstudio.com">NewQuip</a>.</strong> Todos direitos reservados.
      </footer>
  
  <!-- fim controle-sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!--JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
</body>
</html>