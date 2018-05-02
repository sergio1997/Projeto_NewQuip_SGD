
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
 
 
 
 //lista os dados do banco apenas do usario que esta logado no sistema 
 
  $sql= @mysqli_query("SELECT * FROM  cadastro WHERE email='$_SESSION[email]'");
	
	$exibe = @mysqli_fetch_assoc($sql);
		 
   
  // echo "<a href=alterar.php?nome=$exibe[nome] >alterar  </td></a></button>";
   //echo "<td><a href=ExcluirConta.php?nome=$exibe[nome] ></td></a></button></tr>";
    
  
 
	
	
 ?>
 
 
<!DOCTYPE html>
<html>
<head>

 

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

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/calendar.css">
 <script language="Javascript">
  //alerta se deseja excluir ou não os dados
function confirmacao() {
     var resposta = confirm("Tem certeza que desejaremover seus dados?");
 
     if (resposta == true) {
          window.location.href="modelo/ExcluirConta.php?nome=$exibe[nome]";
     }
}
</script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

      <a  class="logo">

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

    <section class="sidebar" >

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
            <i class="glyphicon glyphicon-off"></i> <span>Desligamento</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="../visao/desligamento.php">Desligar funcionário</a></li>
          </ul>
        </li>    
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Férias</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
              <li><a href="../visao/agedarFerias.php">Agendar Férias</a></li>
              <li><a href="../visao/listarFerias.php.php">Listar Férias</a></li>
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
      Parte em branco

      </h1>
    </section>
    <section class="content">

      <div id="calendar"></div>

    <script type="text/javascript" src="js/vendor/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/vendor/underscore-min.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
    <script type="text/javascript">
        var calendar = $("#calendar").calendar(
            {
                tmpl_path: "/tmpls/",
                events_source: function () { return []; }
            });         
    </script>

    </section>
  </div>

  <!-- rodapé -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2018 <a href="#">NewQuip</a>.</strong> Todos os direitos reservados.
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
