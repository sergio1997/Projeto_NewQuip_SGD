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
 
 
 
 
     
   
  // echo "<a href=alterar.php?nome=$exibe[nome] >alterar  </td></a></button>";
   //echo "<td><a href=ExcluirConta.php?nome=$exibe[nome] ></td></a></button></tr>";
    
  
 
  
  
 ?>
 
 
<!DOCTYPE html>
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
 <script language="Javascript">
  //alerta se deseja excluir ou não os dados
function confirmacaoEx() {
     var resposta = confirm("Tem certeza que desejaremover seus dados?");
 
     if (resposta == true) {
          window.location="../visao/Alterarfuncionario.php?id=<?php echo $linha['id']; ?>";
     }
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

      
        
      
      <ul class="sidebar-menu">
      
        <li class="header">Menu</li>
        
        <li><a href="#"><i class="fa fa-link"></i> <span>Consultar Reunioes</span></a></li>
    
       
    
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
          <a href="#"><i class="fa fa-link"></i> <span>Setores</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/CadastraGrupo.php">Cadastrar setor</a></li>
      
            <li><a href="../visao/ListaGrupo.php">Listar setores</a></li>
          </ul>
        </li>
      </ul>
     <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Reunioes</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/MarcarRuniao.php">Marcar Reuniao</a></li>
      
            <li><a href="../visao/listarReuniao.php">Listar setores</a></li>
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
          <a href="#"><i class="fa fa-link"></i> <span>Avaliação</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="../visao/formulario1.php">Avaliação 1</a></li>
       <li><a href="../visao/formulario2.php">Avaliação 2</a></li>
        <li><a href="../visao/formulario3.php">Avaliação 3</a></li>
      
            <li><a href="../visao/informações.php">Informações da Avaliação</a></li>
          </ul>
        </li>
      </ul>

    </section>

  </aside>

  <div class="content-wrapper">
  
  
    <section class="content-header">
        <div class="container">

      <h2 class="page-header">TREINAMENTO</h2>

        <section class="invoice">
            <div class="container">

      
</div>
    
         <?php
         
// definições de host, database, usuário e senha


    include "../modelo/conexao.php ";

    $id=$_GET['id'];

// cria a instrução SQL que vai selecionar os dados
$query = mysql_query("SELECT *,date_format(data_faltou, '%d/%m/%Y') AS data_faltou FROM faltas INNER JOIN funcionario ON funcionario.id=faltas.id  WHERE faltas.id=$id ");



// executa a query
//$dados = mysql_query($query, $conexao) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($query);
// calcula quantos dados retornaram
$total = mysql_num_rows($query);

?>
<h1>Funcionario: <?php echo $linha['Nome'];?></h1>

<table>
<?php

// se o número de resultados for maior que zero, mostra os dados
if($total > 0) {
    
    // inicia o loop que vai mostrar todos os dados
    do {
        ?>
        
      
        <?= $linha['data_faltou'];?>
        <?= $linha['motivo'];?>
        

        <?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($query)); //fimdo if
        }
        
        ?>
        </table>

         <?php
         
// tira o resultado da busca da memória
@mysql_free_result($dados);
 echo"<p>Total de Funcionario da empresa: $total<p>";
?>
              
              
            
    </section>
    </div>

<!-- Rodapé -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Versão</b> 0.9
      </div>
      <strong>Copyright &copy; 2016 <a href="#">RMD</a>.</strong> Todos os direitos reservados.
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