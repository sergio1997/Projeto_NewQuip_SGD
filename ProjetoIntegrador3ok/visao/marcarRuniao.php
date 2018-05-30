<?php
include ("../modelo/iniciarsessao.php");
include ("../modelo/conexao.php");
?>
<html>
    <head> 
        <script language="javascript">
            //chama a função (nomeform) -->
            function valida_dados(nomeform)
            {
                if (nomeform.grupo.value == "")
                {
                    alert("Por favor digite do setor.");
                    return false;
                }
                if (nomeform.data.value == "")
                {
                    alert("Por favor digite a data.");
                    return false;
                }
                if (nomeform.hora.value == "")
                {
                    alert("Por favor digite hora da reunião.");
                    return false;
                }
                if (nomeform.assunto.value == "")
                {
                    alert("Por favor digite o assunto.");
                    return false;

                }

                return true;
            }

        </script>
        <?php
        include("cabecalho.php");
        include("linguagem.php");
        ?>
    </head>
    <?php include ("menu.php") ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Marcar Reuniao</h1>
        </section>
        <section class="content">
            <div class="box box-default color-palette-box">
                <section class="invoice">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div>
                                    <h3 class="box-title">Dados da Reuniao</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-group" id="accordion">
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="../modelo/insereReuniao.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                        <div class="form-group has-feedback">
                            <b>Setor<font color="#FF0000" >*</font></b> 
                            <select  name="setor" class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)' />
                            <option></option>
                            <?php
                            // cria a instrução SQL que vai selecionar os dados
                            $query = sprintf("SELECT * FROM setor");
                            // executa a query
                            $dados = mysqli_query($conexao, $query) or die(mysqli_error());
                            // transforma os dados em um array
                            $linha = mysqli_fetch_assoc($dados);
                            // calcula quantos dados retornaram
                            $total = mysqli_num_rows($dados);
                            ?>
                            <?php
                            // se o número de resultados for maior que zero, mostra os dados
                            if ($total > 0) {

                                // inicia o loop que vai mostrar todos os dados
                                do {
                                    ?><option><?= $linha['nm_setor'] ?></option>

                                    <?php
                                    // finaliza o loop que vai mostrar os dados
                                } while ($linha = @mysqli_fetch_assoc($dados)); //fimdo if
                            }
                            ?>
                            </select>
                        </div>
                        <div class="form-group has-feedback">
                            <b>Data da reunião<font color="#FF0000" >*</font></b> 
                            <input type="date"  class="form-control" name="data" maxlength="40" />
                        </div>
                        <div class="form-group has-feedback">
                            <b>Hora da reunião<font color="#FF0000" >*</font></b> 
                            <input type="time"  class="form-control" name="hora" maxlength="40" />
                        </div>
                        <div class="form-group has-feedback">
                            <b>Assunto da reunião<font color="#FF0000" >*</font></b> 
                            <textarea rows="4" cols="50" class="form-control" name="assunto" />
                            </textarea>
                        </div> 
                        <input type="submit" class="btn btn-primary" value="Marcar Reunião" />
                    </form>
                </section>
            </div>
        </section>
    </div>

    <?php include("rodape.php") ?>