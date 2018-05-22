<?php
include("../modelo/iniciarsessao.php");
include("../modelo/conexao.php");
?>

<html>
    <head>
        <script language="Javascript">
            //alerta se deseja excluir ou não os dados
            function confirmacaoEx() {
                var resposta = confirm("Tem certeza que desejaremover seus dados?");

                if (resposta == true) {
                    window.location = "../visao/Alterarfuncionario.php?id=<?php echo $linha['id']; ?>";
                }
            }
        </script>
        <?php
        include("cabecalho.php");
        include("linguagem.php");
        ?>
    </head>
    <?php
    include("menu.php");
    ?>
    <div class = "content-wrapper">
        <section class = "content-header">
            <h1>Funcionarios Desligado</h1>
        </section>

        <section class = "invoice">
            <div class = "row">
                <div class = "col-md-12">
                    <?php
                    // cria a instrução SQL que vai selecionar os dados
                    $query = @mysqli_query("SELECT *,date_format(dataSaida, '%d/%m/%Y') AS dataSaida,date_format(dataAdmissao, '%d/%m/%Y') AS dataAdmissao FROM funcionario INNER JOIN desligamento ON funcionario.id=desligamento.id ");
                    // executa a query
                    //$dados = mysql_query($query, $conexao) or die(mysql_error());
                    // transforma os dados em um array
                    $linha = @mysqli_fetch_assoc($query);
                    // calcula quantos dados retornaram
                    $total = @mysqli_num_rows($query);
                    ?>
                    <div class="table-responsive">
                        <table border="0" class="display table" width="100%" id="tdFuncionario"> 
                            <thead>            
                                <tr>
                                    <td ><strong>ID</strong> <td><strong>FUNCIONARIO</strong><td><strong>DATA ADMISSÃO</strong> </td><td><strong>DATA SAÍDA</strong> </td><td><strong>ÚLTIMO SALÁRIO</strong> </td>
                                    <?php
                                    // se o número de resultados for maior que zero, mostra os dados
                                    if ($total > 0) {
                                        // inicia o loop que vai mostrar todos os dados
                                        do {
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td ><?php echo $linha['id'] ?> </td><td><?php echo $linha['Nome'] ?></td><td><?php echo $linha['dataAdmissao'] ?></td><td><?php echo $linha['dataSaida'] ?></td>
                                            <td><?php echo $linha['salarioBase'] ?></td>
                                            <td></td>
                                            <td><a href="../modelo/excluirDesligamento.php?id=<?php echo $linha['id_desligamento']; ?>" onClick="return confirm('Deseja realmente deletar o desligamento de: <?php echo $linha['Nome']; ?> ?')"><button class="btn btn-primary">excluir</button></a></td>
                                        </tr>
                                        </tr>
                                        <?php
                                        // finaliza o loop que vai mostrar os dados
                                    } while ($linha = @mysqli_fetch_assoc($query)); //fimdo if
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <?php
                    // tira o resultado da busca da memória
                    @mysqli_free_result($dados);
                    echo"<p>Total de Funcionario desligado: $total<p>";
                    ?>
                </div>
            </div>
        </section>
    </div>
    <?php include("rodape.php")?>