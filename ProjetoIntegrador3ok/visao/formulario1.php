<?php
include "../modelo/iniciarsessao.php";
include "../modelo/conexao.php ";
?>
<html>
    <head>  
        <script language="javascript">
            //chama a função (nomeform) -->
            function valida_dados(nomeform)
            {
                if (nomeform.Proatividade.value == "")
                {
                    alert("Por favor escolha uma opção.");
                    return false;
                }
                if (nomeform.Interesse.value == "") {
                    alert("por favor escolha uma opção");
                    return false;
                }
                if (nomeform.Organização.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.Flexibilidade.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.Sociabilidade.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.Lideranca.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.Vocacao.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.Disponibilidade.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.Eficiencia.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }

                if (nomeform.data_nascimento.value == "") {
                    alert('por favor digite sua data de Nascimento');
                    return false;
                }
                if (nomeform.Trabalho_equipe.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }

                alert("Formulario salvo com sucesso!!");
                return true;
            }
        </script> 
        <?php
        include ("linguagem.php");
        include ("cabecalho.php");
        ?>
    </head>
    <?php
    include("menu.php");
    ?>
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
                                <div>
                                    <h3 class="box-title">1. Proatividade</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel box box-primary">
                    </div>
                    <form action="../modelo/insereformulario1.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                        <div class="form-group">
                            <label>O colaborador apresenta iniciativa?</label>
                            <select class="form-control select2" style="width: 20%;">
                                <option></option>
                                <option>Nunca</option>
                                <option>�?s Vezes</option>
                                <option>Sempre</option>
                            </select>
                        </div>
                        <div>
                            <h3 class="box-title">2. Interesse</h3>
                        </div>

                        <div class="panel box box-primary">
                        </div>
                        <div class="form-group">
                            <label>O funcionário é dedicado em suas tarefas e busca atigir as metas de vedas?</label>
                            <select class="form-control select2" style="width: 20%;">
                                <option></option>
                                <option>Nunca</option>
                                <option>�?s Vezes</option>
                                <option>Sempre</option>
                            </select>
                        </div>
                        <div>
                            <h3 class="box-title">3. Organização</h3>
                        </div>
                        <div class="panel box box-primary">
                        </div>
                        <div class="form-group">
                            <label>O funcionário é organizado em suas tarefas?</label>
                            <select class="form-control select2" style="width: 20%;">
                                <option></option>
                                <option>Nunca</option>
                                <option>�?s Vezes</option>
                                <option>Sempre</option>
                            </select>
                        </div>
                        <div>
                            <h3 class="box-title">4. Flexibilidade</h3>
                        </div>
                        <div class="panel box box-primary">
                        </div>
                        <div class="form-group">
                            <label>O colaborador consegue se adaptar a novas sintuações e clientes?</label>
                            <select class="form-control select2" style="width: 20%;">
                                <option></option>
                                <option>Nunca</option>
                                <option>�?s Vezes</option>
                                <option>Sempre</option>
                            </select>
                        </div>
                        <div>
                            <h3 class="box-title">5. Sociabilidade</h3>
                        </div>
                        <div class="panel box box-primary">
                        </div>
                        <div class="form-group">
                            <label>O funcionário interagem bem com os colegas de trabalho?</label>
                            <select class="form-control select2" style="width: 20%;">
                                <option></option>
                                <option>Nunca</option>
                                <option>�?s Vezes</option>
                                <option>Sempre</option>
                            </select>
                        </div>
                        <div>
                            <h3 class="box-title">6. Liderança</h3>
                        </div>
                        <div class="panel box box-primary">
                        </div>
                        <div class="form-group">
                            <label>O colaborador mostra aptidões para ser lider?</label>
                            <select class="form-control select2" style="width: 20%;">
                                <option></option>
                                <option>Nunca</option>
                                <option>�?s Vezes</option>
                                <option>Sempre</option>
                            </select>
                        </div>
                        <div>
                            <h3 class="box-title">7. Vocação</h3>
                        </div>
                        <div class="panel box box-primary">
                        </div>
                        <div class="form-group">
                            <label>O funcionário tem o talento necessário para o que faz?</label>
                            <select class="form-control select2" style="width: 20%;">
                                <option></option>
                                <option>Nunca</option>
                                <option>�?s Vezes</option>
                                <option>Sempre</option>
                            </select>
                        </div>
                        <div>
                            <h3 class="box-title">8. Disponibilidade</h3>
                        </div>
                        <div class="panel box box-primary">
                        </div>
                        <div class="form-group">
                            <label>O colaborador está sempre pronto a colaborar?</label>
                            <select class="form-control select2" style="width: 20%;">
                                <option></option>
                                <option>Nunca</option>
                                <option>�?s Vezes</option>
                                <option>Sempre</option>
                            </select>
                        </div>
                        <div>
                            <h3 class="box-title">9. Eficiência</h3>
                        </div>
                        <div class="panel box box-primary">
                        </div>
                        <div class="form-group">
                            <label>O funcionário apresenta os resultados esperados de seu trabalho?</label>
                            <select class="form-control select2" style="width: 20%;">
                                <option></option>
                                <option>Nunca</option>
                                <option>�?s Vezes</option>
                                <option>Sempre</option>
                            </select>
                        </div>
                        <div>
                            <h3 class="box-title">10. Trabalho em equipe</h3>
                        </div>
                        <div class="panel box box-primary">
                        </div>
                        <div class="form-group">
                            <label>O funcionário é dedicado em suas tarefas e busca atigir as metas de vedas?</label>
                            <select class="form-control select2" style="width: 20%;">
                                <option></option>
                                <option>Nunca</option>
                                <option>�?s Vezes</option>
                                <option>Sempre</option>
                            </select>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="submit" class="btn btn-primary" value="Salvar" />
                        </div>
                    </form>
                </section>
            </div>
        </section>
    </div>

    <?php include("rodape.php") ?>