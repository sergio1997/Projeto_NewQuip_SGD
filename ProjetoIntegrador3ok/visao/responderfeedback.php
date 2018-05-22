<?php
include("../modelo/iniciarsessao.php");
include("../modelo/conexao.php");
?>
<html>
    <head>
        <?php
        include("cabecalho.php");
        include("linguagem.php");
        ?>
    </head>
    <?php include("menu.php") ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Feedback</h1>
        </section>
        <section class="invoice">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 class="box-title">Dados do Feedback</h3>
                    </div>
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title"></h4>
                        </div>
                        <form action="../modelo/insereFeedback.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                            <div class="form-group has-feedback">
                                <b>Titulo<font color="#FF0000" >*</font></b> 
                                <input type="text"  class="form-control" name="titulo" maxlength="40" placeholder="ex: " onKeypress='return soLetras(event)' />
                            </div>
                            <div class="form-group has-feedback">
                                <b>Nome</b> 
                                <input type="text"  class="form-control" name="nome" maxlength="40" placeholder="ex: " onKeypress='return soLetras(event)' />
                            </div>
                            <div class="form-group has-feedback">
                                <b>Sua opinião<font color="#FF0000" >*</font></b>
                                <textarea rows="4" cols="50" class="form-control" name="assunto"></textarea>
                            </div>      
                            <div>
                                <input type="submit" class="btn btn-primary" value="Enviar" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>  