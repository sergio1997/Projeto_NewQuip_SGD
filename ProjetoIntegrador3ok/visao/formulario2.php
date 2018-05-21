<?php
include "../modelo/iniciarsessao.php";
include "../modelo/conexao.php ";
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
                if (nomeform.questao11.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.questao12.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.questao13.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }
                if (nomeform.questao14.value == "") {
                    alert('por favor escolha uma opção');
                    return false;
                }

                if (nomeform.questao15.value == "") {
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
    </head>
    <?php
    include("menu.php");
    ?>
    <div class="content-wrapper">	
        <section class="content-header">
            <h1>Formulario modelo 2</h1>
        </section>
        <section class="content">
            <div class="box box-default color-palette-box">
                <section class="invoice">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div>
                                    <h3 class="box-title">1. Formulario</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="panel box box-primary">             
                        </div>
                        <form action="../modelo/insereformulario2.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                            <div>
                                <div class="form-group">
                                    <label>1. É relutante em aceitar as decisões abordadas pelo grupo ?</label>
                                    <select class="form-control select2" style="width: 20%;">
                                        <option></option>
                                        <option>Nunca</option>
                                        <option>Pouco</option>
                                        <option>Algumas Vezes</option>
                                        <option>Muito</option>
                                        <option>Quase Sempre</option>
                                    </select>
                                </div>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>2. Ao resolver as dificuldades do dia a dia saber expor suas necessidades e fazer perguntas que auxiliem?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>3. Aceita opiões divergentes da sua com a facilidade e respeito?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>4. Éum exemplo para todos ao defender os valores da empresa?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>5. Se empenha para que os resultados do grupo sejam os menhores possíveis?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>6. É autocinfiante?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>7. Demostra autonomia para decidir?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>8. Sabe admistrar o tempo para superar seus desafios?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>9. Sabe se comunicar de forma clara e coesa?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>10. Ultiliza técnicas administrativa para melhorar o ambiente e a colaborar no trabalho?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>11. Procura auxiliar na redução de despesas e desperdícios?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>12. Encara as necessidades da organização como mais importantes que as nessecidades pessoais?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>13. Está disposto a aceitar riscos?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>14. Desistir com facilidade ao primeiro sinal de dificuldade?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>15. Sabe usar a tecnologia e os recursus da empresa em prol da protividade de seu trabalho?</label>
                                <select class="form-control select2" style="width: 20%;">
                                    <option></option>
                                    <option>Nunca</option>
                                    <option>Pouco</option>
                                    <option>Algumas Vezes</option>
                                    <option>Muito</option>
                                    <option>Quase Sempre</option>
                                </select>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="submit" class="btn btn-primary" value="Salvar" />
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </div>

    <?php include("rodape.php") ?>