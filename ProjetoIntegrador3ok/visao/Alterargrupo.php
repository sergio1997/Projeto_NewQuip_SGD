<?php
include "../modelo/iniciarsessao.php";
include "../modelo/conexao.php";
?>
<?php
$id = $_GET['id_setor']; // Recebendo o valor enviado pelo link

$sql = mysqli_query("SELECT * FROM setor WHERE id_setor='" . $id . "'"); // A instrução delete irá apagar todos os dados da id recebida

$exibe = mysqli_fetch_assoc($sql);
$id_setor = $exibe['id_setor'];
$nome_setor = $exibe['nm_setor'];
?>
<html>
    <head>
        <script language="javascript">
//chama a função (nomeform) -->
            function valida_dados(nomeform)
            {
                if (nomeform.nome.value == "")
                {
                    alert("Por favor digite o nome.");
                    return false;
                }
                if (nomeform.cpf.value == "")
                {
                    alert("Por favor digite seu CPF.");
                    return false;
                }
                if (nomeform.rg.value == "")
                {
                    alert("Por favor digite seu RG.");
                    return false;
                }
                alert("dados Alterado com sucesso!!");
                return true;
            }
        </script>
        <?php
        include "linguagem.php";
        include "cabecalho.php";
        ?>
    </head>   
    <?php include("menu.php") ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Alterar Setor</h1>
        </section>
        <section class="content">
            <div class="box box-default color-palette-box">
                <section class="invoice">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div>
                                    <h3 class="box-title">Dados do Setor</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="panel box box-primary">             
                        </div>
                        <form action="../modelo/salvarAlteracaoGrupo.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                            <div class="form-group has-feedback">
                                <b>Código<font color="#FF0000" >*</font></b> 
                                <input type="text"  class="form-control" name="id_setor" value="<?php echo"$id"; ?>" maxlength="40" placeholder="ex: Finaceiro" onKeypress='return soLetras(event)' />
                            </div>
                            <div class="form-group has-feedback">
                                <b>Nome do Setor<font color="#FF0000" >*</font></b> 
                                <input type="text"  class="form-control" name="nm_setor" value="<?php echo "$nome_setor" ?>" maxlength="40" placeholder="ex: Finaceiro" onKeypress='return soLetras(event)' />
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary" value="Cadastrar" />
                            </div>  
                        </form>
                    </div>
                </section>
            </div>
            <?php include ("rodape.php") ?>