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
 <script language="javascript">
//chama a função (nomeform) -->
function valida_dados (nomeform)
{
    if (nomeform.questao1.value=="")
    {
        alert ("Por favor escolha uma opção.");
        return false;
    }
    if(nomeform.questao2.value==""){
      alert("por favor escolha uma opção");
      return false;
    }
    if(nomeform.questao3.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
   if(nomeform.questao4.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
    if(nomeform.questao5.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
     if(nomeform.questao6.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
     if(nomeform.questao7.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
    if(nomeform.questao8.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
     if(nomeform.questao9.value==""){
      alert('por favor escolha uma opção');
      return false;
    }

     if(nomeform.questao10.value==""){
      alert('por favor digite sua data de Nascimento');
      return false;
    }
    if(nomeform.questao11.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
     if(nomeform.questao12.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
    if(nomeform.questao13.value==""){
      alert('por favor escolha uma opção');
      return false;
    }
     if(nomeform.questao14.value==""){
      alert('por favor escolha uma opção');
      return false;
    }

     if(nomeform.questao15.value==""){
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
      <h1>Formulario modelo 2</h1>
    </section>
    <section class="content">
     
        <div class="box box-default color-palette-box">

        <section class="invoice">
          <div class="row">
        <div class="col-md-12">
          <div class="box box-solid">
          
      <div>
        <h3 class="box-title">1. Formulario</h3>
      </div>

     <div class="box-body">
            
                <div class="panel box box-primary">             
     </div>

    
    
      <form action="../modelo/insereformulario2.php" method="post" name="f1" onSubmit="return valida_dados(this)">
      
	 <div>
           <div class="form-group">
          <label>1. É relutante em aceitar as decisões abordadas pelo grupo ?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>
        </select>
            </div>
			
			<div class="form-group">
          <label>2. Ao resolver as dificuldades do dia a dia saber expor suas necessidades e fazer perguntas que auxiliem?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>

			<div class="form-group">
          <label>3. Aceita opiões divergentes da sua com a facilidade e respeito?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>
			
			<div class="form-group">
          <label>4. Éum exemplo para todos ao defender os valores da empresa?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>
			
			<div class="form-group">
          <label>5. Se empenha para que os resultados do grupo sejam os menhores possíveis?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>
			
			<div class="form-group">
          <label>6. É autocinfiante?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>
			
			<div class="form-group">
          <label>7. Demostra autonomia para decidir?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>
			
			<div class="form-group">
          <label>8. Sabe admistrar o tempo para superar seus desafios?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>

			<div class="form-group">
          <label>9. Sabe se comunicar de forma clara e coesa?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>
			
			<div class="form-group">
          <label>10. Ultiliza técnicas administrativa para melhorar o ambiente e a colaborar no trabalho?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>
			
			<div class="form-group">
          <label>11. Procura auxiliar na redução de despesas e desperdícios?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>

			<div class="form-group">
          <label>12. Encara as necessidades da organização como mais importantes que as nessecidades pessoais?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>
			
			<div class="form-group">
          <label>13. Está disposto a aceitar riscos?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>
			
			<div class="form-group">
          <label>14. Desistir com facilidade ao primeiro sinal de dificuldade?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
            </select>
        </div>
			
			<div class="form-group">
          <label>15. Sabe usar a tecnologia e os recursus da empresa em prol da protividade de seu trabalho?</label>
            <select class="form-control select2" style="width: 20%;">
              <option></option>
              <option>Nunca</option>
              <option>Pouco</option>
              <option>Algumas Vezes</option>
              <option>Muito</option>
              <option>Quase Sempre</option>
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
