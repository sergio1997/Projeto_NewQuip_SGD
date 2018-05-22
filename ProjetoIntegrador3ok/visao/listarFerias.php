<?php
include("../modelo/iniciarsessao.php");
include("../modelo/conexao.php");
?>

<html>
    <head>
        <?php
        include("cabecalho.php");
        include("liguagem.php");
        ?>
    </head>
    <?php include("menu.php") ?>
    <div class="content-wrapper">	
        <section class="content-header">
            <h1>Agenda de férias dos funcionário</h1>
        </section>
        <section class="content">
            <div class="box box-default color-palette-box">
                <section class="invoice">
                    <div v class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">
                            </div>
                        </div>
                    </div>  
                    <?php
                    // cria a instrução SQL que vai selecionar os dados
                    $query = @mysqli_query("SELECT *,date_format(dataInicialFerias, '%d/%m/%Y') AS dataInicialFerias,date_format(dataFinalFerias, '%d/%m/%Y') AS dataFinalFerias FROM registraferias INNER JOIN funcionario ON registraferias.id=funcionario.id INNER JOIN ferias ON registraferias.id_ferias=ferias.id_ferias ");
                    // executa a query
                    //$dados = mysqli_query($query, $conexao) or die(mysqli_error());
                    // transforma os dados em um array
                    $linha = @mysqli_fetch_assoc($query);
                    // calcula quantos dados retornaram
                    $total = @mysqli_num_rows($query);
                    ?>
                    <div class="table-responsive">
                        <table border="0" class="display table" width="100%" id="tdFuncionario"> 
                            <thead>            
                                <tr>
                                    <td ><strong>ID</strong> <td><strong>FUNCIONARIO</strong> </td><td><strong>DATA DE ÍNCIO DAS FÉRIAS</strong> </td><td><strong>DATA DE TERMÍNIO DAS FÉRIAS</strong> </td>
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
                                            <td ><?php echo $linha['id'] ?> </td> <td><?php echo $linha['Nome'] ?></td><td><?php echo $linha['dataInicialFerias'] ?></td><td><?php echo $linha['dataFinalFerias'] ?></td>
                                            <td><a href="../visao/editaferias.php?id=<?php echo $linha['id_ferias']; ?>"><button class="btn btn-primary">Aterar</button></a></td>
                                            <td><a href="../modelo/ExcluirAgendaFerias.php?id=<?php echo $linha['id_resgistrarFerias']; ?>" onClick="return confirm('Deseja realmente deletar o agendamento do funcionário: <?php echo $linha['Nome']; ?> ?')"><button class="btn btn-primary">Excluir </button></a></td> 
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
                    echo"<p>Total : $total<p>";
                    ?>

                </section>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>
