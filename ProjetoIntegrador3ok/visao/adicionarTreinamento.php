<?php include("../modelo/iniciarsessao.php") ?>

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
                alert("dados cadastrados com sucesso!!");
                return true;
            }
        </script>
        <script language="javascript1.2">
            function soLetras(e) {
                if (document.all) {
                    var evt = event.keyCode;
                } else {
                    var evt = e.charCode;
                }
                var chr = String.fromCharCode(evt);
                //	var re = /[A-Za-z]/; // permite apenas de A-Z e de a-z
                var re = /[A-Za-z\s-ÃÕÑÁÉÍÓÚÀÜÇãõñáéíóúàçü]/; // permite de A-Z, a-z, espaços,
                // hífens e caracteres acentuados. Mais caracteres podem ser adicionados a Lista
                return (re.test(chr) || evt < 20); // com evt<20 permitimos <ENTER>,<TAB>,<BACKSPACE>
            }
        </script>
        <script language="javascript1.2">
            function soNumero(e) {
                if (document.all) {
                    var evt = event.keyCode;
                } else {
                    var evt = e.charCode;
                }
                var chr = String.fromCharCode(evt);
                //	var re = /[0-9/; // permite apenas numeros de 0-9;
                var re = /[0-9]/; // permite numeros  de 0-9,
                // hífens e caracteres acentuados. Mais caracteres podem ser adicionados a Lista
                return (re.test(chr) || evt < 20);
            }
        </script>
        <?php include("cabecalho.php") ?>

    </head>
    <?php include("menu.php") ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Cadastrar Treinamento</h1>
        </section>
        <section class="content">
            <div class="box box-default color-palette-box">
                <section class="invoice">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-solid">
                                <div>
                                    <h3 class="box-title">Dados Pessoais</h3>
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
                            </div>
                        </div>
                        <form action="../modelo/AdicionaTreinamento.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                            <div class="form-group has-feedback">
                                <b>Funcionário<font color="#FF0000" >*</font></b> 
                                <input type="text"  class="form-control" name="nome" maxlength="40" placeholder="ex: Jose Maria da silva" onKeypress='return soLetras(event)' />
                            </div>
                            <div class="form-group has-feedback">
                                <b>Evolução<font color="#FF0000" >*</font></b> 
                                <input type="text"  class="form-control" name="evolucao" maxlength="40"  />
                            </div>
                            <div class="form-group has-feedback">
                                <b>Desempenho<font color="#FF0000" >*</font></b> 
                                <textarea rows="4" cols="50" class="form-control" name="desempenho" ></textarea>
                            </div>  
                            <div class="form-group has-feedback">
                                <b>Observações<font color="#FF0000" >*</font></b>
                                <textarea rows="4" cols="50" class="form-control" name="observacoes" ></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Cadastrar" />
                        </form>
                    </div>  
                </section>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>