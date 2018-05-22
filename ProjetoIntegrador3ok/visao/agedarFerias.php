<?php
include("../modelo/iniciarsessao.php");
include("../modelo/conexao.php");
?>
<html>
    <head>    
        <script language="javascript">
//chama a função (nomeform) -->
            function valida_dados(nomeform)
            {
                if (nomeform.funcionario.value == "") {
                    alert('por favor escolha um funcionário');
                    return false;
                }

                if (nomeform.dataInicio.value == "") {
                    alert('por favor digite a data de início das férias');
                    return false;
                }

                if (nomeform.dataFinal.value == "") {
                    alert('por favor digite a data de volta das férias');
                    return false;
                }
                alert("dados cadastrados com sucesso!!");
                return true;
            }
        </script>
        <?php
        include("cabecalho.php");
        include("liguagem.php");
        ?>
    </head>
    <?php include("menu.php") ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Agendar Férias</h1>
        </section>
        <section class="invoice">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 class="box-title">Dados do Agendamento</h3>
                    </div>
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title"></h4>
                        </div>
                        <form action="../modelo/insereAgendaFerias.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                            <?php
                            // cria a instrução SQL que vai selecionar os dados
                            $query = @sprintf("SELECT * FROM funcionario");
                            // executa a query
                            $dados = @mysqli_query($conexao, $query) or die(mysqli_error());
                            // transforma os dados em um array
                            $linha = @mysqli_fetch_assoc($dados);
                            // calcula quantos dados retornaram
                            $total = @mysqli_num_rows($dados);
                            ?>
                            <div class="form-group has-feedback">
                                <b>Nome do funcionário<font color="#FF0000" >*</font></b> 
                                <select  name="funcionario" class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)' />
                                <option></option>      
                                <?php
                                // se o número de resultados for maior que zero, mostra os dados
                                if ($total > 0) {
                                    // inicia o loop que vai mostrar todos os dados
                                    do {
                                        ?><option ><?php echo$linha['Nome'] ?></option>
                                        <?php
                                        // finaliza o loop que vai mostrar os dados
                                    } while ($linha = @mysqli_fetch_assoc($dados)); //fimdo if
                                }
                                ?> 
                                </select>
                            </div>
                            <div class="form-group has-feedback">
                                <b>Data inicio de férias<font color="#FF0000" >*</font></b> 
                                <input type="date" name="dataInicio" class="form-control" placeholder="ex: 26"  maxlength="11" />      
                            </div> 
                            <div class="form-group has-feedback">
                                <b>Data volta  das férias<font color="#FF0000" >*</font></b> 
                                <input type="date" name="dataFinal" class="form-control" placeholder="ex: 26"  maxlength="11" />      
                            </div>     
                            <div class="form-group has-feedback">
                                <input type="submit" class="btn btn-primary" value="Salvar" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>