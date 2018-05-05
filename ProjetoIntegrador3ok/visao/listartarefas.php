<?php
include"../modelo/iniciarsessao.php";
// echo "<a href=alterar.php?nome=$exibe[nome] >alterar  </td></a></button>";
//echo "<td><a href=ExcluirConta.php?nome=$exibe[nome] ></td></a></button></tr>";	
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("cabecalho.php") ?>
    </head>
    <?php include("menu.php") ?>
    <div class="content-wrapper">

        <section class="content-header">
            <h1>Formulario modelo 1</h1>
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
                    // definições de host, database, usuário e senha
                    include "../modelo/conexao.php";
                    // cria a instrução SQL que vai selecionar os dados
                    $query = sprintf("SELECT idreuniao,grupo FROM reuniao");
                    // executa a query
                    $dados = mysqli_query($conexao, $query) or die(mysqli_error());
                    // transforma os dados em um array
                    $linha = mysqli_fetch_assoc($dados);
                    // calcula quantos dados retornaram
                    $total = mysqli_num_rows($dados);
                    ?>
                    <div class="table-responsive">
                        <table border="0" class="display table" width="100%" id="tdFuncionario"> 
                            <thead>
                                <tr>
                                    <td ><strong>ID</strong> <td><strong>SETOR</strong> </td>
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
                                            <td ><?= $linha['idreuniao'] ?> </td> <td><?= $linha['grupo'] ?></td>
                                            <td> <a href="../visao/AlterarReuniao.php?id=<?php echo $linha['idreuniao']; ?>"><button class="btn btn-primary">Alterar </button></a></td>
                                            <td><a href="../modelo/ExcluirReuniao.php?id=<?php echo $linha['idreuniao']; ?>" onClick="return confirm('Deseja realmente deletar o funcionario: <?php echo $linha['idreuniao']; ?> ?')"><button class="btn btn-primary ">Excluir </button></a></td>
                                        </tr>
                                        </tr>
                                        <?php
                                        // finaliza o loop que vai mostrar os dados
                                    } while ($linha = mysqli_fetch_assoc($dados)); //fimdo if
                                }
                                ?>
                            </tbody> 
                        </table>
                        <?php
                        // tira o resultado da busca da memória
                        @mysqli_free_result($dados);
                        echo"<h3 class=\"box-title\">Total de Funcionario da empresa: $total</h3>";
                        ?>
                </section>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>
