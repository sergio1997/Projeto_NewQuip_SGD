<?php
include "../modelo/conexao.php";
include "../modelo/iniciarsessao.php";
// echo "<a href=alterar.php?nome=$exibe[nome] >alterar  </td></a></button>";
//echo "<td><a href=ExcluirConta.php?nome=$exibe[nome] ></td></a></button></tr>";
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include ("cabecalho.php") ?>
    </head>
    <?php include ("menu.php") ?>
    <div class="content-wrapper"> 
        <section class="content-header">
            <h1>FUNCIONARIOS</h1>
        </section>
        <section class="content">
            <div class="box box-default color-palette-box">
                <section class="invoice">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">
                            </div>
                        </div>
                    </div>
                    <?php
                    $id_funcionario = $_GET['id'];
                    // definições de host, database, usuário e senha
                    // cria a instrução SQL que vai selecionar os dados
                    $query ="SELECT *,date_format(data_falta, '%d/%m/%Y') AS data_falta FROM faltas INNER JOIN codigo_faltas ON codigo_faltas.id_faltas=faltas.id_falta INNER JOIN funcionario ON codigo_faltas.id=funcionario.id WHERE funcionario.id='$id_funcionario' ";
                    $query1 = mysqli_query($conexao, $query);
                    // executa a query
                    //$dados = mysql_query($query, $conexao) or die(mysql_error());
                    // transforma os dados em um array
                    $linha = @mysqli_fetch_assoc($query1);
                    // calcula quantos dados retornaram
                    $total = @mysqli_num_rows($query1);
                    ?>
                    <div class="table-responsive">
                        <table border="0" class="display table" width="100%" id="tdFuncionario"> 
                            <thead>            
                                <tr>
                                    <td ><strong>ID</strong> <td><strong>FUNCIONARIO</strong> </td><td><strong>DATA</strong> </td><td><strong>MOTIVO</strong> </td>
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
                                            <td><?= $linha['id'] ?> </td> <td><?= $linha['Nome'] ?></td><td><?= $linha['data_falta'] ?></td><td><?= $linha['motivo'] ?></td>
                                            <td><a href="../visao/alterarFaltas.php?id=<?php echo $linha['id_falta']; ?>"><button class="btn btn-primary">Alterar</button></a></td>
                                            <td><a href="../modelo/excluirFalta.php?id=<?php echo $linha['id_falta']; ?>" onClick="return confirm('Deseja realmente deletar a Falta: <?php echo $linha['id_falta']; ?> ?')"><button class="btn btn-primary">Excluir </button></a></td>
                                        </tr>
                                        <?php
                                        // finaliza o loop que vai mostrar os dados
                                    } while ($linha = mysqli_fetch_assoc($query1)); //fimdo if
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>              
                    <?php
                    // tira o resultado da busca da memória
                    @mysqli_free_result($dados);
                    echo"<p>Total de Ausências: $total<p>";
                    ?>
                </section>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>