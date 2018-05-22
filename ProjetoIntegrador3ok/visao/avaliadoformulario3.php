<?php
include("../modelo/iniciarsessao.php");
include("../modelo/conexao.php");
?>

<html>
    <head>
        <?php
        include("cabecalho.php");
        include("linguagem.php");
        ?>
        <script language="javascript">
            //chama a função (nomeform) -->
            function valida_dados(nomeform)
            {
                if (nomeform.id.value == "")
                {
                    alert("Por favor selecione um nome");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <?php include("menu.php") ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Formulario De Avaliação Complexa</h1>
        </section>
        <section class="invoice">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 class="box-title">Funcionário</h3>
                    </div>
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title"></h4>
                        </div>
                        <form action="../modelo/verificacaoformulario3.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                            
                                <?php
                                // cria a instrução SQL que vai selecionar os dados
                                $query = sprintf("SELECT * FROM funcionario");
                                // executa a query
                                $dados = @mysqli_query($conexao, $query) or die(mysqli_error());
                                // transforma os dados em um array
                                $linha = @mysqli_fetch_assoc($dados);
                                // calcula quantos dados retornaram
                                $total = @mysqli_num_rows($dados);
                                ?>
                                <div class="form-group has-feedback">
                                    <b>Nome<font color="#FF0000" >*</font></b> 
                                    <select  name="id" class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)' />
                                    <option></option>
                                    <?php
                                    // se o número de resultados for maior que zero, mostra os dados
                                    if ($total > 0) {
                                        // inicia o loop que vai mostrar todos os dados
                                        do {
                                            ?><option value="<?php echo $linha['id'] ?>"><?php echo $linha['Nome'] ?></option>
                                            <?php
                                            // finaliza o loop que vai mostrar os dados
                                        } while ($linha = @mysqli_fetch_assoc($dados)); //fimdo if
                                    }
                                    ?>   
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="submit" class="btn btn-primary" value="Avançar" />
                                </div>
                         
                        </form>
                    </div>
                </div>
        </section>
    </div>
    <?php include("rodape.php") ?>

