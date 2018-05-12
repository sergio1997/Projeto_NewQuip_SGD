<?php
include ("../modelo/conexao.php");
include ("../modelo/iniciarsessao.php");
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
        include("linguagem.php");
        include("cabecalho.php");
        ?>
    </head>
    <?php
    include("menu.php");
    ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Indece de rotatividade Em Perdas de Pessoas Por iniciativa do funcionario </h1>
        </section>
        <section class="invoice">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 class="box-title">Resultdo</h3>
                    </div>
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title"></h4>
                        </div>
                        <?php
                        $dataInicial = $_POST['dataInicial'];
                        $dataFinal = $_POST['dataFinal'];
                        $query = sprintf("SELECT * FROM `desligamento` WHERE dataSaida BETWEEN'$dataInicial' AND '$dataFinal' AND questao7!=''");
                        // executa a query
                        $dados = @mysqli_query($conexao, $query) or die(mysqli_error());
                        // transforma os dados em um array
                        $linha = @mysqli_fetch_assoc($dados);
                        // calcula quantos dados retornaram
                        $D = @mysqli_num_rows($dados);
                        $query1 = sprintf("SELECT * FROM funcionario WHERE dataAdmissao BETWEEN'$dataInicial' AND '$dataFinal'");
                        // executa a query
                        $dados1 = @mysqli_query($conexao, $query1) or die(mysqli_error());
                        // transforma os dados em um array
                        $linha1 = @mysqli_fetch_assoc($dados1);
                        // calcula quantos dados retornaram
                        $N = @mysqli_num_rows($dados1);
                        ?> 
                        <?php
                        // se o número de resultados for maior que zero, mostra os dados
                        if ($D > 0) {
                            // inicia o loop que vai mostrar todos os dados
                            do {
                                ?>
                                <?php
                                // finaliza o loop que vai mostrar os dados
                            } while ($linha = @mysqli_fetch_assoc($dados)); //fimdo if
                        }
                        ?>
                        <?php
                        // tira o resultado da busca da memória
                        @mysqli_free_result($dados);
                        echo"<p>Total de Funcionario desligado por Iniciativa do Funcionario: $D<p>";
                        ?>
                        <?php
                        // se o número de resultados for maior que zero, mostra os dados
                        if ($N > 0) {
                            // inicia o loop que vai mostrar todos os dados
                            do {
                                ?>
                                <?php
                                // finaliza o loop que vai mostrar os dados
                            } while ($linha = @mysqli_fetch_assoc($dados1)); //fimdo if
                        }
                        ?>
                        <?php
                        // tira o resultado da busca da memória
                        @mysqli_free_result($dados);
                        echo"<p>Total de Funcionario: $N<p>";
                        $data1 = new DateTime($dataInicial);
                        $data2 = new DateTime($dataFinal);
                        $intervalo = $data1->diff($data2);
                        echo "Intervalo é de {$intervalo->y} anos, {$intervalo->m} meses e {$intervalo->d} dias<br/>";
                        $A = $intervalo->m;
                        $resultado1 = ($D * 100);
                        $resultado2 = ($N / $A);
                        $final = $resultado1 / $resultado2;
                        echo "resultado do índece de perda Por iniciativa do Funcionario: <font color='#FF0000' >$final%</font>";
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include ("rodape.php") ?>