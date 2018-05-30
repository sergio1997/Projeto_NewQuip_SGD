<?php
include "../modelo/inciarsessao.php";
include "../modelo/conexao.php";
?>

<html>
    <head>
        <script language="javascript">
            //chama a função (nomeform) -->
            function valida_dados(nomeform)
            {
                if (nomeform.nomefuncionario.value == "")
                {
                    alert("Por favor informe nome do funcionario.");
                    return false;
                }
                if (nomeform.setor.value == "")
                {
                    alert("Por favor informe o setor.");
                    return false;
                }
                if (nomeform.tarefas.value == "")
                {
                    alert("Por favor digite a tarefa.");
                    return false;
                }
                if (nomeform.datainicio.value == "")
                {
                    alert("Por favor digite a data de início.");
                    return false;
                }
                if (nomeform.horainicio.value == "")
                {
                    alert("Por favor digite a hora de início.");
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
            <h1>Agendar Nova Tarefa</h1>
        </section>
        <section class="invoice">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 class="box-title">Dados da Tarefa</h3>
                    </div>
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title"></h4>
                        </div>      
                        <form action="../modelo/salvarAngendamento.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                            <div class="form-group has-feedback">
                                <b>Funcionário<font color="#FF0000" >*</font></b> 
                                <select  name="nomefuncionario" class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)' />
                                <option></option>
                                <?php
                                // cria a instrução SQL que vai selecionar os dados
                                $query = sprintf("SELECT * FROM funcionario");
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
                                        ?><option><?= $linha['nome'] ?></option>

                                        <?php
                                        // finaliza o loop que vai mostrar os dados
                                    } while ($linha = @mysqli_fetch_assoc($dados)); //fimdo if
                                }
                                ?>       
                                </select>
                            </div>
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
                                <b>Tarefas<font color="#FF0000" >*</font></b>
                                <textarea rows="4" cols="50" class="form-control" name="tarefas" ></textarea>
                            </div>
                            <div class="form-group has-feedback">
                                <b>Data do inicio<font color="#FF0000" >*</font></b> 
                                <input type="date"  class="form-control" name="datainicio" maxlength="40"  />
                            </div>
                            <div class="form-group has-feedback">
                                <b>Hora do inicio <font color="#FF0000" >*</font></b> 
                                <input type="time"  class="form-control" name="horainicio" maxlength="40"  />
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary" value="Agendar Tarefa" />
                            </div>  
                        </form>

                    </div>

                </div>
            </div>
        </section>
    </div>


    <?php include("rodape.php") ?>