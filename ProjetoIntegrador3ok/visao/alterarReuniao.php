<?php
include ("../modelo/conexao.php");
include ("../modelo/iniciarsessao.php");

$id = $_GET['id']; // Recebendo o valor enviado pelo link

$sql = @mysqli_query("SELECT * FROM reuniao WHERE idreuniao='" . $id . "'"); // A instrução delete irá apagar todos os dados da id recebida

$exibe = @mysqli_fetch_assoc($sql);
$idreuniao = $exibe['idreuniao'];
$grupo = $exibe['grupo'];
$data_reuniao = $exibe['data_reuniao'];
$hora = $exibe['hora'];
$assunto = $exibe['assunto'];
?>
<html>
    <head>
        <script language="javascript">
            //chama a função (nomeform) -->
            function valida_dados(nomeform)
            {
                if (nomeform.nome.value == "")
                {
                    alert("Por favor digite o nome.");
                    return false;
                }
                if (nomeform.cpf.value == "")
                {
                    alert("Por favor digite seu CPF.");
                    return false;
                }
                if (nomeform.rg.value == "")
                {
                    alert("Por favor digite seu RG.");
                    return false;
                }
                alert("dados cadastrados com sucesso!!");
                return true;
            }
        </script>
        <?php
        include("linguagem.php");
        include("cabecalho.php");
        ?>
    </head>
    <?php include("menu.php") ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
            </h1>
        </section>
        <section class="content">
            <div class="container">
                <h2 class="page-header">Alterar Dados da Reuniao</h2>
                <section class="invoice">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div>
                                    <h3 class="box-title">Dados da Reuniao</h3>
                                </div>
                                <div class="box-body">
                                    <div class="box-group" id="accordion">
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                </h4>
                                            </div>
                                            <form action="../modelo/salvaReuniao.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                                                <div class="form-group has-feedback">
                                                    <b>ID da Reunião<font color="#FF0000" >*</font></b> 
                                                    <input type="text"  class="form-control" name="idreuniao" maxlength="40" placeholder="ex: Jose Maria da silva" value="<?php echo "$idreuniao" ?>" readonly="readonly"/>
                                                </div>
                                                <b>Nomo do Grupo<font color="#FF0000" >*</font></b> 
                                                <input type="text"  class="form-control" name="grupo" maxlength="40" placeholder="ex: Jose Maria da silva" value="<?php echo "$grupo" ?>"/>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Data da reunião<font color="#FF0000" >*</font></b> 
                                            <input type="date"  class="form-control" name="data" maxlength="40" value="<?php echo"$data_reuniao" ?>" />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Hora da reunião<font color="#FF0000" >*</font></b> 
                                            <input type="time"  class="form-control" name="hora" maxlength="40" value="<?php echo "$hora" ?>" />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Assunto da reunião<font color="#FF0000" >*</font></b> 
                                            <textarea rows="4" cols="50" class="form-control" name="assunto" value="" ><?php echo "$assunto"; ?>
                                            </textarea>
                                        </div> 

                                        <input type="submit" class="btn btn-primary" value="Marcar Runiao" />

                                        </form>

                                        </selection>

                                        <footer class="main-footer">
                                            <div class="pull-right hidden-xs">
                                                <b>Versão</b> 0.9
                                            </div>
                                            <strong>Copyright &copy; 2018 <a href="http://almsaeedstudio.com">NewQuip</a>.</strong> Todos direitos reservados.
                                        </footer>
                                        <?php include("rodape.php") ?>