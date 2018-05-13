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
                if (nomeform.nomeSetor.value == "") {
                    alert('por favor digite o nome do setor');
                    return false;
                }
                alert("dados cadastrados com sucesso!!");
                return true;
            }

        </script>
        <?php
        include ("linguagem.php");
        include("cabecalho.php");
        ?>
    </head>
    <?php include("menu.php") ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Cadastrar Setor</h1>
        </section>
        <section class="content">
            <div class="box box-default color-palette-box">
                <section class="invoice">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div>
                                    <h3 class="box-title">Dados do Setor</h3>
                                </div>
                                <div class="box-body">
                                    <div class="panel box box-primary">             
                                    </div>
                                    <form action="../modelo/insereGrupo.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                                        <div class="form-group has-feedback">
                                            <b>Nome do Setor<font color="#FF0000" >*</font></b> 
                                            <input type="text"  class="form-control" name="nomeSetor" maxlength="40" placeholder="ex: Finaceiro" onKeypress='return soLetras(event)' />
                                        </div>
                                        <div>
                                            <input type="submit" class="btn btn-primary" value="Cadastrar" />
                                        </div>  
                                    </form>
                                </div>     
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
   <?php include("rodape.php")?>