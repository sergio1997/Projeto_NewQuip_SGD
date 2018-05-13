<?PHP
include "../modelo/conexao.php";
include "../modelo/iniciarsessao.php";

//lista os dados do banco apenas do usario que esta logado no sistema t
$sql = @mysqli_query("SELECT * FROM  cadastro WHERE email='$_SESSION[email]'");
$exibe = @mysqli_fetch_assoc($sql);
// echo "<a href=alterar.php?nome=$exibe[nome] >alterar  </td></a></button>";
//echo "<td><a href=ExcluirConta.php?nome=$exibe[nome] ></td></a></button></tr>";
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("cabecalho.php") ?>
    </head>
        <?php include("menu.php") ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Parte em branco
            </h1>
        </section>
        <section class="content">
            <div id="calendar"></div>
      
            

        </section>
    </div>
    <?php include("rodape.php") ?>
