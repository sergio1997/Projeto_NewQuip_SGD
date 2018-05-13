<?php
include "../modelo/inciarsessao.php";
require_once ("../modelo/conexao.php");
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
                                $query1 = @mysqli_query("SELECT *FROM funcionario");
                                // executa a query
                                //$dados = mysql_query($query, $conexao) or die(mysql_error());
                                // transforma os dados em um array
                                $linha1 = @mysqli_fetch_assoc($query1);
                                // calcula quantos dados retornaram
                                $total = @mysqli_num_rows($query1);
                                // se o número de resultados for maior que zero, mostra os dados
                                if ($total > 0) {
                                    // inicia o loop que vai mostrar todos os dados
                                    do {
                                        ?><option><?php echo $linha1['Nome'] ?></option>
                                        <?php
                                        // finaliza o loop que vai mostrar os dados
                                    } while ($linha1 = @mysqli_fetch_assoc($query1)); //fimdo if
                                }
                                ?>  
                                </select>
                            </div>
                        </form>
                            <form action="../modelo/salvarAngendamento.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                                <div class="form-group has-feedback">
                                    <b>Setor<font color="#FF0000" >*</font></b> 
                                    <input type="text"  class="form-control" name="grupo" maxlength="40"  />
                                </div>
                                <div class="form-group has-feedback">
                                    <b>Funcionarios do grupo<font color="#FF0000" >*</font></b>
                                    <textarea rows="4" cols="50" class="form-control" name="usuarios" ></textarea>
                                </div>
                                <div class="form-group has-feedback">
                                    <b>Tarefas<font color="#FF0000" >*</font></b>
                                    <textarea rows="4" cols="50" class="form-control" name="tarefas" ></textarea>
                                </div>
                                <div class="form-group has-feedback">
                                    <b>Tarefas ha Fazer<font color="#FF0000" >*</font></b>
                                    <textarea rows="4" cols="50" class="form-control" name="tarefasfazer" ></textarea>
                                </div>
                                <div class="form-group has-feedback">
                                    <b>Data do inicio<font color="#FF0000" >*</font></b> 
                                    <input type="date"  class="form-control" name="datainicio" maxlength="40"  />
                                </div>
                                <div class="form-group has-feedback">
                                    <b>Hora do inicio <font color="#FF0000" >*</font></b> 
                                    <input type="time"  class="form-control" name="horainicio" maxlength="40"  />
                                </div>
                                <div class="form-group has-feedback">
                                    <b>Data de terminio<font color="#FF0000" >*</font></b> 
                                    <input type="date"  class="form-control" name="dataterminio" maxlength="40"  />
                                </div>
                                <div class="form-group has-feedback">
                                    <b>Hora de Terminio<font color="#FF0000" >*</font></b> 
                                    <input type="time"  class="form-control" name="horaterminio" maxlength="40"/>
                                </div>
                                <div class="form-group has-feedback">
                                    <b>Estimativa em Data<font color="#FF0000" >*</font></b> 
                                    <input type="date"  class="form-control" name="estimativadata" maxlength="40"  />
                                </div>
                                <div class="form-group has-feedback">
                                    <b>Estimativa em hora<font color="#FF0000" >*</font></b> 
                                    <input type="time"  class="form-control" name="estimativahora" maxlength="40"  />
                                </div>
                                <div class="form-group has-feedback">
                                    <b>Produtividade<font color="#FF0000" >*</font></b> 
                                    <input type="text"  class="form-control" name="produtividade" maxlength="3" placeholder="Ex: 100"  />
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