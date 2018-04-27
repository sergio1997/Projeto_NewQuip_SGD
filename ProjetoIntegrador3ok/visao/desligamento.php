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
