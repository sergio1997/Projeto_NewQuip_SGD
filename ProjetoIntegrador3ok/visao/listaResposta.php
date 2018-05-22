<?php
include ("../modelo/iniciarsessao.php");
include ("../modelo/conexao.php");
?>

<html>
    <head>
        <?php
        include("cabecalho.php");
        include("linguagem.php");
        ?>
        <script language="Javascript">
            //alerta se deseja excluir ou não os dados
            function confirmacaoEx() {
                var resposta = confirm("Tem certeza que desejaremover seus dados?");
                if (resposta == true) {
                    window.location = "../visao/Alterarfuncionario.php?id=<?php echo $linha['id']; ?>";
                }
            }
        </script>
    </head>
    <?php include("menu.php") ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Feedback</h1>
        </section>
        <section class="invoice">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    // definições de host, database, usuário e senha
                    // cria a instrução SQL que vai selecionar os dados
                    $query = @mysqli_query("SELECT * FROM feedback ");
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
                                    <td ><strong>ID</strong> <td><strong>TITULO</strong> </td><td><strong>INDETIFICAÇÃO</strong> </td><td><strong>FEEDBACK</strong> </td>
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
                                            <td ><?php echo $linha['id_feedback'] ?> </td> <td><?php echo $linha['titulo'] ?></td><td><?php echo $linha['nome'] ?></td><td><?php echo $linha['resposta'] ?></td>
                                            <td><a href="../visao/verResposta.php?id=<?php echo $linha['id_feedback']; ?>"><button class="btn btn-primary">Visualizar</button></a></td>
                                            <td><a href="../modelo/excluirResposta.php?id=<?php echo $linha['id_feedback']; ?>" onClick="return confirm('Deseja realmente deletar o funcionario: <?php echo $linha['id_feedback']; ?> ?')"><button class="btn btn-primary">Excluir </button></a></td>
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
                    echo"<p>Total de resposta: $total<p>";
                    ?>
                </div>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>