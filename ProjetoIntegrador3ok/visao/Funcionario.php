


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
 <script language="Javascript">
  //alerta se deseja excluir ou não os dados
function confirmacaoEx() {
     var resposta = confirm("Tem certeza que desejaremover seus dados?");
 
     if (resposta == true) {
          window.location="../visao/Alterarfuncionario.php?id=<?php echo $linha['id']; ?>";
     }
}
</script>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 
href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" 
src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" ></script>
<src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
</script>
<script>
$(document).ready(function(){
    $('#tdFuncionario').dataTable();
});
</script>
<script>
$(document).ready(function(){
    $('#minhaTabela').dataTable();
});
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

    <div class="content-wrapper"></div>	
    <section class="content-header">
    <h1>FUNCIONARIOS</h1>
    </section>
      <section class="content">
      </section>

      <div class="box box-default color-palette-box"></div>

    <section class="invoice">
          <div class="row">
              <div class="col-md-12"></div>
          <div class="box box-solid">
          
</div>
          </div>              
    
         <?php
 

		include "../modelo/conexao.php ";

// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT id,Nome, cpf FROM funcionario");
// executa a query
$dados = mysqli_query($query, $conexao) or die(mysql_error());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>
<div class="table-responsive">
<table border="0" class="display table" width="100%" id="tdFuncionario" > 
<thead>
            
            <tr >
               <td ><strong>ID</strong></td> <td><strong>NOME</strong> </td><td><strong>CPF</strong> </td>
<?php
// se o número de resultados for maior que zero, mostra os dados
if($total > 0) {
    
    // inicia o loop que vai mostrar todos os dados
    do {
        ?>
        </tr>
        </thead>
        <tbody>  
        <tr >
        <td ><?=$linha['id']?> </td> <td><?=$linha['Nome']?></td><td><?=$linha['cpf']?></td>
            <td><a href="../visao/Alterarfuncionario.php?id=<?php echo $linha['id']; ?>"><center><button class="btn btn-primary">Alterar Dados </button></center></a></td>
             <td><a href="../visao/AlterarDadosDeAcesso.php?id=<?php echo $linha['id']; ?>"><center><button class="btn btn-primary">Alterar Acesso </button></center></a></td>
       
            <td><a href="../modelo/Excluirfuncionario.php?id=<?php echo $linha['id']; ?>" onClick="return confirm('Deseja realmente deletar o funcionario: <?php echo $linha['id']; ?> ?')"><center><button class="btn btn-primary">Excluir Dados </button></center></a></td>
        </tr>
        </tr>
        
        
        

        <?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysqli_fetch_assoc($dados)); //fimdo if
        }
        
        ?>
          </tbody>  
        </table>

         <?php
         
// tira o resultado da busca da memória
@mysqli_free_result($dados);
 echo"<p>Total de Funcionario da empresa: $total</p>";
?>
              
               
            
    </section>
    
 <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versão</b> 0.9
        </div>
        <strong>Copyright &copy; 2018 <a href="http://almsaeedstudio.com">NewQuip</a>.</strong> Todos direitos reservados.
      </footer> 

<!--JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
</body>
</html>

