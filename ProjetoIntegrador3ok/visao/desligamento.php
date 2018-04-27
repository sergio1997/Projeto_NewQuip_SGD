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
    require_once("../modelo/conexao.php");
 ?>
<html> 
    <head> 
        <script language="javascript">
//chama a função (nomeform) -->
function valida_dados (nomeform)
{
    if (nomeform.funcionario.value=="")
    {
        alert ("Por favor seleione o nome .");
        return false;
    }
    if(nomeform.dataSaida.value==""){
      alert("por favor digite a data de saida");
      return false;
    }
    if(nomeform.MotivoDesligamento.value==""){
      alert('por favor digite o motivo do desligamento');
      return false;
    }
   if(nomeform.q1.value==""){
      alert('por favor seleione uma opção na questão 1 do formulário');
      return false;
    }
    if(nomeform.q1PQ.value==""){
      alert('por favor digite o porque na questão 1 do Formulário');
      return false;
    }
     if(nomeform.q2.value==""){
      alert('por favor digite sua opinião na questão 2');
      return false;
    }
     if(nomeform.q3.value==""){
      alert('por favor digite sua opinião na questão 3');
      return false;
    }
    if(nomeform.q4.value==""){
      alert('por favor seleione uma opção na questão 4');
      return false;
    }

     if(nomeform.q51.value==""){
      alert('por favor seleione uma opção na questão 5 Ambiente');
      return false;
    }
    if(nomeform.q52.value==""){
      alert('por favor seleione uma opção na questão 5 Sálario');
      return false;
    }
    if(nomeform.q53.value==""){
      alert('por favor seleione uma opção na questão 5 Possibilidade de carreira');
      return false;
    }
    if(nomeform.q54.value==""){
      alert('por favor seleione uma opção na questão 5 Chefia');
      return false;
    }
    if(nomeform.q55.value==""){
      alert('por favor seleione uma opção na questão 5 Organização');
      return false;
    }
    
  alert("dados salvos com sucesso!!");
  return true;
}
</script>
<script language="javascript1.2">
      function soLetras(e){
      if (document.all){var evt=event.keyCode;}
      else{var evt = e.charCode;}
      var chr = String.fromCharCode(evt);
      //  var re = /[A-Za-z]/; // permite apenas de A-Z e de a-z
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
      //  var re = /[0-9/; // permite apenas numeros de 0-9;
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
            <li data-toggle="modal" data-target="#suporte"><a href="#">Suporte</a></li>
            <li data-toggle="modal" data-target="#contato"><a href="#">Ajuda</a></li>
          </ul>
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li><a><?php echo $logado ?></a></li>
            <li><a  href="../controle/logout.php" >» Logout</a></li>
            <li class="dropdown user user-menu"></li>
          </ul>
        </div>
    </nav>
  </header>
</header>
