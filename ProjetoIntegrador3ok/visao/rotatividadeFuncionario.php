<?php
include "../modelo/conexao.php";
include "../modelo/iniciarsessao.php";
?>

<html>
    <head>
        <script language="javascript">
            //chama a função (nomeform) -->
            function valida_dados(nomeform)
            {
                if (nomeform.dataInicial.value == "") {
                    alert('por favor digite o data de inicial');
                    return false;
                }

                if (nomeform.dataFinal.value == "") {
                    alert('por favor digite o data de final');
                    return false;
                }
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
            <h1>índece de Rotatividade de Perda de Pessoas</h1>
        </section>
        <section class="invoice">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 class="box-title">Informe o Período dos Desligamentos</h3>
                    </div>
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title"></h4>
                        </div>
                        
                        <form action="calculaRotatividadeFuncionario.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                            <div class="form-group has-feedback">
                                <b>Data inicial<font color="#FF0000" >*</font></b> 
                                <input type="date" name="dataInicial" class="form-control" placeholder="ex: 26"  maxlength="11" />      
                            </div> 
                            <div class="form-group has-feedback">
                                <b>Data final<font color="#FF0000" >*</font></b> 
                                <input type="date" name="dataFinal" class="form-control" placeholder="ex: 26"  maxlength="11" />      
                            </div> 
                            <input type="submit" class="btn btn-primary" value="Calcular" />
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include ("rodape.php")?>



