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
 

include "../modelo/conexao.php ";
 ?>


<html>
    <head>
    
       <script language="javascript">
//chama a função (nomeform) -->
function valida_dados (nomeform)
{
    if (nomeform.Proatividade.value=="")
    {
        alert ("Por favor escolha uma opção.");
        return false;
    }
    if(nomeform.Interesse.value==""){
      alert("por favor escolha uma opção");
      return false;
    }
    if(nomeform.Organização.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
   if(nomeform.Flexibilidade.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
    if(nomeform.Sociabilidade.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
     if(nomeform.Lideranca.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
     if(nomeform.Vocacao.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
    if(nomeform.Disponibilidade.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
     if(nomeform.Eficiencia.value==""){
      alert('por favor escolha uma opção');
      return false;
    }

     if(nomeform.data_nascimento.value==""){
      alert('por favor digite sua data de Nascimento');
      return false;
    }
    if(nomeform.Trabalho_equipe.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
    

  alert("Formulario salvo com sucesso!!");
  return true;
}



</script> 

 

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Next Job</title>
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

      <a href="pagina_inicial.php" class="logo">

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
      <h1>Formulario modelo 1</h1>
    </section>
    <section class="content">

    <div class="box box-default color-palette-box">

        <section class="invoice">
          <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">

      <div>
        <h3 class="box-title">1. Proatividade</h3>
      </div>

      <div class="panel box box-primary">
      </div>

      <form action="../modelo/insereformulario1.php" method="post" name="f1" onSubmit="return valida_dados(this)">

        <div class="form-group">
          <label>O colaborador apresenta iniciativa?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>�?s Vezes</option>
              <option>Sempre</option>
            </select>
        </div>

      <div>
        <h3 class="box-title">2. Interesse</h3>
      </div>

      <div class="panel box box-primary">
      </div>

			<div class="form-group">
          <label>O funcionário é dedicado em suas tarefas e busca atigir as metas de vedas?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>�?s Vezes</option>
              <option>Sempre</option>
            </select>
        </div>

      <div>
        <h3 class="box-title">3. Organização</h3>
      </div>

      <div class="panel box box-primary">
      </div>

			<div class="form-group">
          <label>O funcionário é organizado em suas tarefas?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>�?s Vezes</option>
              <option>Sempre</option>
            </select>
        </div>

      <div>
        <h3 class="box-title">4. Flexibilidade</h3>
      </div>

      <div class="panel box box-primary">
      </div>

			<div class="form-group">
          <label>O colaborador consegue se adaptar a novas sintuações e clientes?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>�?s Vezes</option>
              <option>Sempre</option>
            </select>
        </div>

      <div>
        <h3 class="box-title">5. Sociabilidade</h3>
      </div>

      <div class="panel box box-primary">
      </div>

			<div class="form-group">
          <label>O funcionário interagem bem com os colegas de trabalho?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>�?s Vezes</option>
              <option>Sempre</option>
            </select>
        </div>

			<div>
        <h3 class="box-title">6. Liderança</h3>
      </div>

      <div class="panel box box-primary">
      </div>

			<div class="form-group">
          <label>O colaborador mostra aptidões para ser lider?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>�?s Vezes</option>
              <option>Sempre</option>
            </select>
        </div>

      <div>
        <h3 class="box-title">7. Vocação</h3>
      </div>

      <div class="panel box box-primary">
      </div>

			<div class="form-group">
          <label>O funcionário tem o talento necessário para o que faz?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>�?s Vezes</option>
              <option>Sempre</option>
            </select>
      </div>

      <div>
        <h3 class="box-title">8. Disponibilidade</h3>
      </div>

      <div class="panel box box-primary">
      </div>

			<div class="form-group">
          <label>O colaborador está sempre pronto a colaborar?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>�?s Vezes</option>
              <option>Sempre</option>
            </select>
        </div>

      <div>
        <h3 class="box-title">9. Eficiência</h3>
      </div>
          <div class="panel box box-primary">
      </div>

			<div class="form-group">
          <label>O funcionário apresenta os resultados esperados de seu trabalho?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>�?s Vezes</option>
              <option>Sempre</option>
            </select>
        </div>

        <div>
          <h3 class="box-title">10. Trabalho em equipe</h3>
        </div>

        <div class="panel box box-primary">
        </div>

			<div class="form-group">
          <label>O funcionário é dedicado em suas tarefas e busca atigir as metas de vedas?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>�?s Vezes</option>
              <option>Sempre</option>
            </select>
        </div>

        <div class="form-group has-feedback">
			  <input type="submit" class="btn btn-primary" value="Salvar" />
        </div>
			    </form>
        </section>

<!-- Rodapé -->
  <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versão</b> 0.9
        </div>
        <strong>Copyright &copy; 2016 <a href="http://almsaeedstudio.com">RMD</a>.</strong> Todos direitos reservados.
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
