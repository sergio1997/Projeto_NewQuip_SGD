<?php
include ("../modelo/conexao.php");
include ("../modelo/iniciarsessao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        include ("linguagem.php");
        include ("cabecalho.php");
        ?> 
    </head>
    <?php include("menu.php") ?>
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
                            <?php
                            // cria a instrução SQL que vai selecionar os dados
                            $query = "SELECT * FROM setor";
                            $query1 = mysqli_query($conexao, $query);
                            $linha1 = mysqli_fetch_assoc($query1);
                            $total = @mysqli_num_rows($query1);
                            ?>
                            <div class="table-responsive">
                                <table border="0" class="display table" width="100%" id="tdFuncionario"> 
                                    <thead>
                                        <tr>
                                            <td ><strong>ID</strong> <td><strong>NOME DO SETOR</strong> </td>
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
                                                    <td ><?= $linha1['id_setor'] ?> </td> <td><?= $linha1['nome_setor'] ?></td>
                                                    <td><a href="../visao/Alterargrupo.php?id=<?php echo $linha1['id_setor']; ?>"><button class="btn btn-primary">Alterar </button></a></td>
                                                    <td><a href="../modelo/Excluirgrupo.php?id=<?php echo $linha1['nome_setor']; ?>" onClick="return confirm('Deseja realmente deletar o funcionario: <?php echo $quer['id_setor']; ?> ?')"><button class="btn btn-primary">Excluir </button></a></td>
                                                </tr>
                                                <?php
                                                // finaliza o loop que vai mostrar os dados
                                            } while ($linha1 = mysqli_fetch_assoc($query1)); //fimdo if
                                        }
                                        ?>
                                    </tbody> 
                                </table>
                            </div>
                            <?php
// tira o resultado da busca da memória
                            @mysqli_free_result($dados);
                            echo"<p>Total de Grupos na empresa: $total<p>";
                            ?>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>