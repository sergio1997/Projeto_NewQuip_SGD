 <?php 

    require_once("../modelo/conexao.php");
include "../modelo/nivel_acesso1.php";

 // esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php. 
 
 
 
 if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)) { 
 unset($_SESSION['email']);
 unset($_SESSION['senha']); 
 header('location:index.php');
  
 }
 //grava a sessão dos dados do usario logando atarvs de uma sessão 
 $logado = $_SESSION['email'];
 


 ?>


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

      <span class="logo-mini"><b>SGD</b>SGD</span>
      <span class="logo-lg"><b>SGD</b>SGD</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
              <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="pagina_inicial.php">Inicio</a></li>
            <li data-toggle="modal" data-target="#suporte"><a href="#">Suporte</a></li>
            <li data-toggle="modal" data-target="#contato"><a href="#">Ajuda</a></li>
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
      </script>
    </head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <a href="index2.html" class="logo">

      <span class="logo-mini"><b>N</b>JB</span>
      <span class="logo-lg"><b>Next</b>Job</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
              <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="pagina_inicial.php">Inicio</a></li>
            <li data-toggle="modal" data-target="#suporte"><a href="#">Suporte</a></li>
            <li data-toggle="modal" data-target="#contato"><a href="#">Ajuda</a></li>
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
      </script>
    </head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <a href="index2.html" class="logo">

      <span class="logo-mini"><b>N</b>JB</span>
      <span class="logo-lg"><b>Next</b>Job</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
              <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="pagina_inicial.php">Inicio</a></li>
            <li data-toggle="modal" data-target="#suporte"><a href="#">Suporte</a></li>
            <li data-toggle="modal" data-target="#contato"><a href="#">Ajuda</a></li>
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
  </header></script>
    </head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <a href="index2.html" class="logo">

      <span class="logo-mini"><b>N</b>JB</span>
      <span class="logo-lg"><b>Next</b>Job</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
              <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="pagina_inicial.php">Inicio</a></li>
            <li data-toggle="modal" data-target="#suporte"><a href="#">Suporte</a></li>
            <li data-toggle="modal" data-target="#contato"><a href="#">Ajuda</a></li>
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
  </header></script>
    </head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <a href="index2.html" class="logo">

      <span class="logo-mini"><b>N</b>JB</span>
      <span class="logo-lg"><b>Next</b>Job</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
              <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="pagina_inicial.php">Inicio</a></li>
            <li data-toggle="modal" data-target="#suporte"><a href="#">Suporte</a></li>
            <li data-toggle="modal" data-target="#contato"><a href="#">Ajuda</a></li>
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
      </header>
 <aside class="main-sidebar">
    <section class="sidebar" >
    <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-calendar-check-o"></i> <span>Agenda de tarefas</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/Agendar.php">Agendar tarefa</a></li>
            <li><a href="../visao/listartarefas.php">Listar tarefas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-group"></i> <span>Áreas Organizacionais</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/CadastraGrupo.php">Cadastrar áreas organizacionais</a></li>
            <li><a href="../visao/ListaGrupo.php">Listar áreas organizacionais</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-copy"></i> <span>Ausência</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/CadastraFaltas.php">Registrar ausência</a></li>
            <li><a href="../visao/Listarausencia.php">Listar áreas organizacionais</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-pencil"></i> <span>Avaliações</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
           <li class="treeview">
          <a href="#"><i></i> <span>Avaliação 360°</span> <i class="fa fa-angle-left pull-right"></i></a>
           <ul class="treeview-menu">
            <li><a href="../visao/avaliadoformulario1.php">Avaliação enxuta</a></li>
            <li><a href="../visao/avaliadoformulario2.php">Avaliação direta</a></li>
            <li><a href="../visao/avaliadoformulario3.php">Avaliação complexa</a></li>
            </ul>
          </ul>
        </li>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-line-chart"></i> <span>Central de Relatório</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
           <li class="treeview">
          <a href="#"><i></i> <span>Analítico</span> <i class="fa fa-angle-left pull-right"></i></a>
           <ul class="treeview-menu">
            <li><a href="../visao/relatorioAnalitico.php">Funcionário</a></li>
            <li><a href="../visao/ridiceRotatividade.php">Índece de rotatividade</a></li>
            </ul>
            </li>
            <li class="treeview">
          <a href="#"><i></i> <span>Sintética</span> <i class="fa fa-angle-left pull-right"></i></a>
           <ul class="treeview-menu">
            <li><a href="../visao/resultadograficoEnxuto.php">Avaliação enxuta</a></li>
            <li><a href="../visao/resultadograficoDireto.php">Avaliação direta</a></li>
            <li><a href="../visao/resultadograficoComplexo.php">Avaliação complexa</a></li>
          </ul>
        </li>
        </ul>
         <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-off"></i> <span>Desligamento</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="../visao/Desligamento.php">Desligar funcionário</a></li>
            <li><a href="../visao/listaDesligamento.php">Listar desligamento</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-comment"></i> <span>Feedback</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/responderfeedback.php">responder feedback</a></li>
            <li><a href="../visao/listaResposta.php">Listar feedback</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Férias</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/agedarFerias.php">Agendar férias</a></li>
            <li><a href="../visao/listarFerias.php">Agenda das férias</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-user"></i> <span>Funcionário</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="CadastrarFuncionario.php">Cadastar funcionário</a></li>
            <li><a href="../visao/Funcionario.php">Lista funcionário</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-refresh"></i> <span>Índece de Rotatividade</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/Rotatividade.php">Perda de pessoas</a></li>
            <li><a href="../visao/RotatividadeRH.php">Rotatividade RH</a></li>
            <li><a href="../visao/RotatividadeFuncionario.php">Perda por iniciativa funcionário</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-comments"></i> <span>Reuniões</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/Consultarreuniao.php">Consultar reuniões</a></li>
            <li><a href="../visao/listarReuniao.php">Listar reuniões</a></li>
            <li><a href="../visao/MarcarRuniao.php">Marcar reunião</a></li>
          </ul>
        </li>
       <li class="treeview">
          <a href="#"><i class="fa fa-graduation-cap"></i> <span>Treinamento</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/AdicionarTreinamento.php">Adicionar treinamento</a></li>
            <li><a href="../visao/agendarTreinamento.php">Agendar treinamento</a></li>
            <li><a href="../visao/listarTreinamento.php">Lista treinamento</a></li>
          </ul>
        </li>
      </ul>
    </section>