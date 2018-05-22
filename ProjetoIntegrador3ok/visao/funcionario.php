<?php
include ("../modelo/iniciarsessao.php");
include ("../modelo/conexao.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
        include("cabecalho.php");
        include("linguagem.php");
        ?>
    </head>
    <?php include("menu.php") ?>
    <div class="content-wrapper">	
        <section class="content-header">
            <h1>Funcionário</h1>
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
                    // cria a instrução SQL que vai selecionar os dados
                    $query = sprintf("SELECT id,Nome, cpf FROM funcionario");
                    // executa a query
                    $dados = mysqli_query($conexao, $query) or die(mysqli_error());
                    // transforma os dados em um array
                    $linha = mysqli_fetch_assoc($dados);
                    // calcula quantos dados retornaram
                    $total = mysqli_num_rows($dados);
                    ?>
                    <div class="table-responsive">
                        <table border="0" class="display table" width="100%" id="tdFuncionario" > 
                            <thead>
                                <tr >
                                    <td ><strong>ID</strong></td> <td><strong>NOME</strong> </td><td><strong>CPF</strong> </td>
                                    <?php
                                    // se o número de resultados for maior que zero, mostra os dados
                                    if ($total > 0) {

                                        // inicia o loop que vai mostrar todos os dados
                                        do {
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody>  
                                        <tr >
                                            <td ><?= $linha['id'] ?> </td> <td><?= $linha['Nome'] ?></td><td><?= $linha['cpf'] ?></td>
                                            <td><a href="../visao/Alterarfuncionario.php?id=<?php echo $linha['id']; ?>"><center><button class="btn btn-primary">Alterar Dados </button></center></a></td>
                                            <td><a href="../visao/AlterarDadosDeAcesso.php?id=<?php echo $linha['id']; ?>"><center><button class="btn btn-primary">Alterar Acesso </button></center></a></td>

                                            <td><a href="../modelo/Excluirfuncionario.php?id=<?php echo $linha['id']; ?>" onClick="return confirm('Deseja realmente deletar o funcionario: <?php echo $linha['id']; ?> ?')"><center><button class="btn btn-primary">Excluir Dados </button></center></a></td>
                                        </tr>
                                        <?php
                                        // finaliza o loop que vai mostrar os dados
                                    } while ($linha = mysqli_fetch_assoc($dados)); //fimdo if
                                }
                                ?>
                            </tbody>  
                        </table>
                    </div>
                    <?php
                    // tira o resultado da busca da memória
                    @mysqli_free_result($dados);
                    echo"<p>Total de Funcionario da empresa: $total</p>";
                    ?>
                </section>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>