<?php
include "../modelo/iniciarsessao.php";
include "../modelo/conexao.php";
?>
<html>
    <head>
        <?php
        include("linguagem.php");
        include("cabecalho.php");
        ?>
        <script language="javascript">
            //chama a função (nomeform) -->
            function valida_dados(nomeform)
            {
                if (nomeform.questao1.value == "")
                {
                    alert("Por favor escolha uma opção.");
                    return false;
                }
                if (nomeform.questao2.value == "") {
                    alert("por favor escolha uma opção");
                    return false;
                }
                if (nomeform.questao3.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.questao4.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.questao5.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.questao6.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.questao7.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.questao8.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.questao9.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }

                if (nomeform.questao10.value == "") {
                    alert('por favor digite sua data de Nascimento');
                    return false;
                }


                alert("Formulario salvo com sucesso!!");
                return true;
            }



        </script> 



    </head>
    <?php
    include("menu.php");
    ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Formulario modelo 3</h1>
        </section>
        <section class="content">
            <div class="box box-default color-palette-box">
                <section class="invoice">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div>
                                    <h3 class="box-title"> Liderança</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">            
                        <div class="panel box box-primary">             
                        </div>
                        <form action="../modelo/insereformulario3.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                            <div class="form-group has-feedback" >
                                <div class="form-group">
                                    <label>1. Consegue influenciar os demais colaboradores e motivá-los a praticipar dos projetos propostos?</label>
                                    <select class="form-control select2" style="width: 20%;">
                                        <option></option>
                                        <option>Nunca</option>
                                        <option>Ás vezes</option>
                                        <option>Sempre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>2. Entede a diversidade de personalidade e consegue desperta o melhor neles?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Ás vezes</option>
                                    <option>Sempre</option>
                                </select>
                            </div>
                            <div>
                                <h3 class="box-title"> Integridade Moral</h3>
                            </div>
                            <div >
                                <div class="panel box box-primary">             
                                </div>
                                <div class="form-group">
                                    <label>3.Trabalha de forma ética?</label>
                                    <select class="form-control select2" style="width: 20%;">
                                        <option></option>
                                        <option>Nunca</option>
                                        <option>Ás vezes</option>
                                        <option>Sempre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>4.Busca a imparcialidades e a justiça quando há desavença de opiniões?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Ás vezes</option>
                                    <option>Sempre</option>
                                </select>
                            </div>
                            <div>
                                <h3 class="box-title"> Versatilidade</h3>
                            </div>
                            <div >
                                <div class="panel box box-primary">             
                                </div>
                                <div class="form-group has-feedback" >
                                    <div class="form-group">
                                        <label>5. Motiva as pessoas da equipe que faz parte a buscarem soluçoes para os problemas de seus departamentos?</label>
                                        <select class="form-control select2" style="width: 20%;">
                                            <option></option>
                                            <option>Nunca</option>
                                            <option>Ás vezes</option>
                                            <option>Sempre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>6. Não foge de novas responsabilidades e enfrente as dificuldades com criatividade?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Ás vezes</option>
                                    <option>Sempre</option>
                                </select>
                            </div>
                            <div>
                                <h3 class="box-title"> Relacionamento</h3>
                            </div>
                            <div >
                                <div class="panel box box-primary">             
                                </div>
                                <div class="form-group">
                                    <label>7. Saber unir os colaboradores na busca de um verdadeiro trbalho em equipe?</label>
                                    <select class="form-control select2" style="width: 20%;">
                                        <option></option>
                                        <option>Nunca</option>
                                        <option>Ás vezes</option>
                                        <option>Sempre</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>8. Procura solicitar as opiniões e reaproximar as pessoas quando ocorre conflito?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Ás vezes</option>
                                    <option>Sempre</option>
                                </select>
                            </div>
                            <div>
                                <h3 class="box-title">Olhar Sistêmico</h3>
                            </div>
                            <div >
                                <div class="panel box box-primary">             
                                </div>
                                <div class="form-group has-feedback" >
                                    <div class="form-group">
                                        <label>9. Enxergar necessidades de soluçoes para problemas de clientes e da empresa e solicita auxílio dos líderes?</label>
                                        <select class="form-control select2" style="width: 20%;">
                                            <option></option>
                                            <option>Nunca</option>
                                            <option>Ás vezes</option>
                                            <option>Sempre</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>10. Percebe a importância de se conectar com os outros departamentos da organização para cumprir suas tarefas?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Ás vezes</option>
                                    <option>Sempre</option>
                                </select>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="submit" class="btn btn-primary" value="Cadastrar" />
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>

