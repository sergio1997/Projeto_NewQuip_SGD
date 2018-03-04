<?php
//as variaveis digitadarecebe os dados digitado na pagina aonterior 



//conexão mysql
//Configura de acesso ao banco de dados
$conf['host'] = "localhost"; //host do banco de dados
$conf['bd'] = "bancodedados"; //nome do banco
$conf['usuario'] = "root"; //nome de usuário de acesso ao banco
$conf['senha'] = ""; //senha de acesso ao banco de dados

//conexão com o banco de dados
$conexao = @mysql_connect($conf['host'], $conf['usuario'], $conf['senha']) or die("ERRO NA CONEXÃO COM MYSQL");
$db = @mysql_select_db($conf['bd'], $conexao) or die("ERRO NA SELEÇÃO DO BANCO DE DADOS MYSQL");
?>