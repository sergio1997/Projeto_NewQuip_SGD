<?PHP
include "../modelo/conexao.php";
include "../modelo/iniciarsessao.php";

//lista os dados do banco apenas do usario que esta logado no sistema t
$sql = @mysqli_query("SELECT * FROM  cadastro WHERE email='$_SESSION[email]'");
$exibe = @mysqli_fetch_assoc($sql);
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
            <h1>

            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h1>Cadastrar Funcionário</h1>
                        </div>
                        <div class="icon">
                            <i class="fa fa-pencil"></i>
                        </div>
                        <a href="../visao/cadastrarFuncionario.php" class="small-box-footer">Acesso Rápido <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">

                            <h1>Marcar Reunião</h1>
                        </div>
                        <div class="icon">
                            <i class="fa fa-calendar-plus-o"></i>
                        </div>
                        <a href="../visao/marcarRuniao.php" class="small-box-footer">Acesso Rápido <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">

                            <h1>Cadastrar Área Organizacional</h1>
                        </div>
                        <div class="icon">
                            <i class="fa fa-group"></i>
                        </div>
                        <a href="../visao/cadastraGrupo.php" class="small-box-footer">Acesso Rápido <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">

                            <h1>Cadastrar Treinamento</h1>
                        </div>
                        <div class="icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <a href="../visao/adicionarTreinamento.php" class="small-box-footer">Acesso Rápido <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <section class="col-lg-5 ">
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header">
                            <i class="fa fa-calendar"></i>
                            <h3 class="box-title">Calendario</h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <!-- button with a dropdown -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                                        <i class="fa fa-edit"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <div id="calendar" style="width: 100%"></div>
                        </div>
                    </div>
                </section>
                <div class="col-md-7">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Próximos eventos</h3>
                        </div>

                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Data do evento</th>
                                        <th>Anotações sobre o evento</th>
                                    </tr>

                                    </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Adicionar Evento</h4>
                        </div>
                        <div class="modal-body">
                            <form action="../modelo/salvarNota.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                                <div class="form-group has-feedback">
                                    <b>data evento<font color="#FF0000" >*</font></b> 
                                    <input type="date"  class="form-control" name="dataEvento" maxlength="40" placeholder="ex: Finaceiro" onKeypress='return soLetras(event)' />
                                </div>
                                <div class="form-group has-feedback">
                                    <b>Assunto sobre o evento<font color="#FF0000" >*</font></b>
                                    <textarea rows="4" cols="50" class="form-control" name="evento"></textarea>
                                </div>      
                                <div>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-primary" value="Adicionar" />
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>
