<?PHP
include "../modelo/conexao.php";
include "../modelo/nivel_acesso1.php";
include "../modelo/iniciarsessao.php";

$id = $_GET['id'];

$sql = @mysqli_query("SELECT * FROM  funcionario WHERE id='" . $id . "'");
$exibe = @mysqli_fetch_assoc($sql);
$email = $exibe['email'];
$senha = $exibe['senha'];
$nivel = $exibe['nivel'];
?>
<!DOCTYPE html>
<html>
    <head>
        <script language="javascript">
            function valida_dados(nomeform)
            {
                if (nomeform.email.value == "" || nomeform.email.value.indexOf('@', 0) == -1 || nomeform.email.value.indexOf('.', 0) == -1)
                {
                    alert("Email invalido.");
                    return false;
                }
                if (nomeform.senha.value == "")
                {
                    alert("Por favor digite a senha.");
                    return false;
                }
                senha = document.f1.senha.value
                senha1 = document.f1.senha1.value
                if (senha != senha1 || senha == "") {
                    alert("senha não confere");
                    return false;
                }
                alert("dados Alterado com sucesso!!");
                return true;
            }
        </script>
        <?php
        include ("linguagem.php");
        include ("cabecalho.php");
        ?>
    </head>
    <?php include ("cabecalho.php"); ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Agendar nova Tarefa</h1>
        </section>
        <section class="content">
            <div class="box box-default color-palette-box">
                <section class="invoice">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div>
                                    <h3 class="box-title">Dados da Tarefa</h3>
                                </div>

                                <div class="box-body">
                                    <div class="box-group" id="accordion">
                                        <div class="panel box box-primary">
                                            <div class="box-header with-border">
                                                <h4 class="box-title">
                                                </h4>
                                            </div>
                                            <form action="../modelo/salvarAlteracaoDeAcesso.php" method="post" name="f1" onSubmit="return valida_dados(this)">

                                                <div class="form-group has-feedback">

                                                    <b>Código<font color="#FF0000" >*</font></b> 
                                                    <input type="text" value="<?php echo "$id"; ?>" class="form-control" name="id" maxlength="40"  />
                                                </div>
                                                <div class="form-group has-feedback">

                                                    <b>E-mail<font color="#FF0000" >*</font></b> 
                                                    <input type="email"  class="form-control" name="email" maxlength="40" value="<?php echo "$email"; ?>" />
                                                </div>



                                                <div class="form-group has-feedback">

                                                    <b>Senha<font color="#FF0000" >*</font></b> 
                                                    <input type="password"  class="form-control" name="senha" maxlength="40" value="<?php echo "$senha"; ?>"  />
                                                </div>
                                                <div class="form-group has-feedback">

                                                    <b>Confirmar Senha <font color="#FF0000" >*</font></b> 
                                                    <input type="password"  class="form-control" name="senha1" maxlength="40" value="<?php echo"$senha"; ?>" />
                                                </div>
                                                <div class="form-group has-feedback">

                                                    <b>Nível de Acesso<font color="#FF0000" >*</font></b> 
                                                    <select class="form-control" name="nivel" value="<?php echo "$nivel"; ?>" />
                                                    <option value="<?php echo "$nivel"; ?>"> <?php echo "$nivel"; ?></option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    </select>
                                                </div>

                                                <div>
                                                    <input type="submit" class="btn btn-primary" value="Agendar Tarefa" />
                                                </div>  
                                            </form>
                                        </div>
                                        </section>
                                    </div>
                                    <?php include ("rodape.php") ?>