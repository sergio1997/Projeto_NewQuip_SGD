<?PHP
include "../modelo/conexao.php";
include "../modelo/iniciarsessao.php";
//lista os dados do banco apenas do usario que esta logado no sistema 
$sql = @mysqli_query("SELECT * FROM  cadastro WHERE email='$_SESSION[email]'");
$exibe = @mysqli_fetch_assoc($sql);
// echo "<a href=alterar.php?nome=$exibe[nome] >alterar  </td></a></button>";
//echo "<td><a href=ExcluirConta.php?nome=$exibe[nome] ></td></a></button></tr>";
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("cabecalho.php") ?>
    </head>
    <?php include("menu.php") ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <h2 class="page-header">Cadastrar Falta</h2>
                <section class="invoice">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div>
                                    <h3 class="box-title">Dados do Falta</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="box-group" id="accordion">
                            <div class="panel box box-primary">
                                <div class="box-header with-border">
                                    <h4 class="box-title">
                                    </h4>
                                </div>
                                <form action="../modelo/inserefalta.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                                    <div class="form-group has-feedback">
                                        <b>Código do Funcionario<font color="#FF0000" >*</font></b> 
                                       <select  name="nomefuncionario" class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)' />
                                <option></option>
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
                                <?php
                                // se o número de resultados for maior que zero, mostra os dados
                                if ($total > 0) {

                                    // inicia o loop que vai mostrar todos os dados
                                    do {
                                        ?><option><?= $linha['Nome'] ?></option>

                                        <?php
                                        // finaliza o loop que vai mostrar os dados
                                    } while ($linha = @mysqli_fetch_assoc($dados)); //fimdo if
                                }
                                ?>       
                                </select> 
                                    
                                    </div>
                                    <div class="form-group has-feedback">
                                        <b>Data da Falta<font color="#FF0000" >*</font></b> 
                                        <input type="date"  class="form-control" name="data" maxlength="40" />
                                    </div>
                                    <div class="form-group has-feedback">
                                        <b>Motivo<font color="#FF0000" >*</font></b> 
                                        <input type="text"  class="form-control" name="motivo" maxlength="40" />
                                    </div>
                                    <input type="submit" class="btn btn-primary" value="Cadastrar" />
                                </form>
                            </div>
                        </div>  
                    </div>
                </section>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>