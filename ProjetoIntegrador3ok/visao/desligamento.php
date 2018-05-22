<?php
include "../modelo/inicarsessao.php";
include "../modelo/conexao.php";
?>
<html> 
    <head> 
        <script language="javascript">
//chama a função (nomeform) -->
            function valida_dados(nomeform)
            {
                if (nomeform.funcionario.value == "")
                {
                    alert("Por favor seleione o nome .");
                    return false;
                }
                if (nomeform.dataSaida.value == "") {
                    alert("por favor digite a data de saida");
                    return false;
                }
                if (nomeform.MotivoDesligamento.value == "") {
                    alert('por favor digite o motivo do desligamento');
                    return false;
                }
                if (nomeform.q1.value == "") {
                    alert('por favor seleione uma opção na questão 1 do formulário');
                    return false;
                }
                if (nomeform.q1PQ.value == "") {
                    alert('por favor digite o porque na questão 1 do Formulário');
                    return false;
                }
                if (nomeform.q2.value == "") {
                    alert('por favor digite sua opinião na questão 2');
                    return false;
                }
                if (nomeform.q3.value == "") {
                    alert('por favor digite sua opinião na questão 3');
                    return false;
                }
                if (nomeform.q4.value == "") {
                    alert('por favor seleione uma opção na questão 4');
                    return false;
                }

                if (nomeform.q51.value == "") {
                    alert('por favor seleione uma opção na questão 5 Ambiente');
                    return false;
                }
                if (nomeform.q52.value == "") {
                    alert('por favor seleione uma opção na questão 5 Sálario');
                    return false;
                }
                if (nomeform.q53.value == "") {
                    alert('por favor seleione uma opção na questão 5 Possibilidade de carreira');
                    return false;
                }
                if (nomeform.q54.value == "") {
                    alert('por favor seleione uma opção na questão 5 Chefia');
                    return false;
                }
                if (nomeform.q55.value == "") {
                    alert('por favor seleione uma opção na questão 5 Organização');
                    return false;
                }

                alert("dados salvos com sucesso!!");
                return true;
            }
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SGD</title>
        <!-- Parte responsiva -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Fontes usadas -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- icones -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- tema -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

        <script language="Javascript">
            //alerta se deseja excluir ou não os dados
            function confirmacao() {
                var resposta = confirm("Tem certeza que desejaremover seus dados?");

                if (resposta == true) {
                    window.location.href = "../modelo/ExcluirConta.php?nome=$exibe[nome]";
                }
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
            <h1>Desligamento do Funcionário</h1>
        </section>
        <section class="invoice">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 class="box-title">Dados do Desligamento</h3>
                    </div>
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title"></h4>
                        </div>
                        <form action="../modelo/insereDesligamento.php" method="post" name="f1" onSubmit="return valida_dados(this)">
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
                            <div class="form-group has-feedback">
                                <b>Nome do funcionário<font color="#FF0000" >*</font></b> 
                                <select  name="funcionario" class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)' />
                                <option></option>  
                                <?php
                                // se o número de resultados for maior que zero, mostra os dados
                                if ($total > 0) {
                                    // inicia o loop que vai mostrar todos os dados
                                    do {
                                        ?><option ><?php echo $linha['Nome'] ?></option>

                                        <?php
                                        // finaliza o loop que vai mostrar os dados
                                    } while ($linha = @mysqli_fetch_assoc($dados)); //fimdo if
                                }
                                ?>
                                </select>
                            </div>
                            <div class="form-group has-feedback">
                                <b>Data saída<font color="#FF0000" >*</font></b> 
                                <input type="date" name="dataSaida" class="form-control" placeholder="ex: 26"  maxlength="11" />      
                            </div> 
                            <div class="form-group has-feedback">
                                <b>Motivo do desligamento<font color="#FF0000" >*</font></b><br/> 
                                <textarea rows="4" cols="50" class="form-control" name="MotivoDesligamento" ></textarea>
                            </div>
                            <div>
                                <h3 class="box-title">Questionário </h3>
                            </div>
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title"></h4>
                                </div>
                                <div class="form-group has-feedback" >
                                    <b>1.Se você pudesse, continuaria na companhia? Por quê?
                                        <font color="#FF0000" >*</font></b><br/> 
                                    <select name="q1"   class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)'>
                                        <option>selecione uma opção</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div> 
                                <div class="form-group has-feedback">
                                    <textarea rows="4" cols="50" class="form-control" name="q1PQ" ></textarea>
                                </div>
                                <div class="form-group has-feedback">
                                    <b>2.Quais os pontos altos da empresa?<font color="#FF0000" >*</font></b><br/> 
                                    <textarea rows="4" cols="50" class="form-control" name="q2" ></textarea>
                                </div>
                                <div class="form-group has-feedback">
                                    <b>3.Quais os pontos fracos da empresa?<font color="#FF0000" >*</font></b><br/> 
                                    <textarea rows="4" cols="50" class="form-control" name="q3" ></textarea>
                                </div>
                                <div class="form-group has-feedback">
                                    <b>4.Já trabalhou em outro lugar? Quantos?<font color="#FF0000" >*</font></b><br/> 
                                    <select name="q4"   class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)'>
                                        <option>selecione uma opção</option>
                                        <option>Sim</option>
                                        <option>Não</option>
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <b><font color="#FF0000" ></font></b><br/> 
                                    <select name="q4Quantidade"   class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)'>
                                        <option>selecione uma opção</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>ou mais</option>
                                    </select>
                                </div>
                                <table border="1">
                                    <tr>
                                        <td><b>5.Como julgar a empresa quanto a<font color="#FF0000" >*</font></b></td><td>Ruim</td><td>Sofrível</td><td>Reg.</td><td>Bom</td><td>Ótimo</td>
                                    </tr>
                                    <tr>
                                        <td><b>Ambiente</b></td><td><input type="radio" name="q51" value="1"></td><td><input type="radio" name="q51" value="2"></td><td><input type="radio" name="q51" value="3"></td><td><input type="radio" name="q51" value="4"></td><td><input type="radio" name="q51" value="5"></td> 
                                    </tr>
                                    <tr>
                                        <td><b>Salário</b></td><td><input type="radio" name="q52" value="1"></td><td><input type="radio" name="q52" value="2"></td><td><input type="radio" name="q52" value="3"></td><td><input type="radio" name="q52" value="4"></td><td><input type="radio" name="q52" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Possibilidade de carreira</b></td><td><input type="radio" name="q53" value="1"></td><td><input type="radio" name="q53" value="2"></td><td><input type="radio" name="q53" value="3"></td><td><input type="radio" name="q53" value="4"></td><td><input type="radio" name="q53" value="5"></td>
                                    </tr>

                                    <tr>
                                        <td><b>Chefia</b></td><td><input type="radio" name="q54" value="1"></td><td><input type="radio" name="q54" value="2"></td><td><input type="radio" name="q54" value="3"></td><td><input type="radio" name="q54" value="4"></td><td><input type="radio" name="q54" value="5"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Organização</b></td><td><input type="radio" name="q55" value="1"></td><td><input type="radio" name="q55" value="2"></td><td><input type="radio" name="q55" value="3"></td><td><input type="radio" name="q55" value="4"></td><td><input type="radio" name="q55" value="5"></td>
                                    </tr>
                                </table>
                                <br/>
                                <div class="form-group has-feedback">
                                    <b>Observação</b><br/> 
                                    <textarea rows="4" cols="50" class="form-control" name="q5observacao" ></textarea>
                                </div>
                                <div class="form-group has-feedback">
                                    <b>6.Motivo do desligamento por iniciativa da organização</b><br/> 
                                    <b>Motivo do desligamento</b><br/> 
                                    <select name="q6"  class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)'>
                                        <option></option>
                                        <option>Reprovado na experiência</option>
                                        <option>Indisciplina</option>
                                        <option>Faltas e atrasos</option>
                                        <option>Redução do pessoal</option>
                                        <option>Baixa eficiência</option>
                                        <option>Outros motivos</option>
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <b>7.Motivo do desligamento por iniciativa do empregado:</b><br/> 
                                    <b>Motivo do desligamento:</b><br/> 
                                    <select name="q7"  class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)'>
                                        <option></option>
                                        <option>Salário inadequado</option>
                                        <option>Condições de trabalho</option>
                                        <option>Saúde</option>
                                        <option>Estudos</option>
                                        <option>Horário de trabalho</option>
                                        <option>Outro emprego</option>
                                        <option>Casamento</option>
                                        <option>Mudança de endereço</option>
                                        <option>Viagem</option>
                                        <option>Condução</option>
                                        <option>Chefia</option>
                                        <option>Cargo</option>
                                        <option>Outros motivos</option>
                                    </select> 
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="submit" class="btn btn-primary" value="Desligar" />
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>