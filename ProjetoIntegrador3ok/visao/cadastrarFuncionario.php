<?php
include "../modelo/iniciarsessao.php";
include "../modelo/conexao.php";
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
                if (nomeform.nome_pai.value == "") {
                    alert("por favor digite o nome do pai");
                    return false;
                }
                if (nomeform.nome_mae.value == "") {
                    alert('por favor digite o nome da mae');
                    return false;
                }
                if (nomeform.cpf.value == "") {
                    alert('por favor digite o CPF');
                    return false;
                }
                if (nomeform.rg.value == "") {
                    alert('por favor digite o RG');
                    return false;
                }
                if (nomeform.orgao_emissor.value == "") {
                    alert('por favor digite seu orgão emissor');
                    return false;
                }
                if (nomeform.emissao_rg.value == "") {
                    alert('por favor digite a data de emissão do seu RG');
                    return false;
                }
                if (nomeform.data_nascimento.value == "") {
                    alert('por favor digite sua data de Nascimento');
                    return false;
                }
                if (nomeform.NMcarteira_trabalho.value == "") {
                    alert('por favor digite o nuemero de sua Carteira de Trabalho');
                    return false;
                }
                if (nomeform.data_nascimento.value == "") {
                    alert('por favor digite sua data de Nascimento');
                    return false;
                }
                if (nomeform.pis.value == "") {
                    alert('por favor digite o PIS');
                    return false;
                }
                if (nomeform.data_admissao.value == "") {
                    alert('por favor digite a data da Admissão');
                    return false;
                }
                if (nomeform.cargo.value == "") {
                    alert('por favor digite o cargo');
                    return false;
                }
                if (nomeform.setor.value == "") {
                    alert('por favor digite o Setor');
                    return false;
                }
                if (nomeform.salario_base.value == "") {
                    alert('por favor digite o Salario Base');
                    return false;
                }
                if (nomeform.complemento_salarial.value == "") {
                    alert('por favor digite o Complemento Salarial');
                    return false;
                }
                if (nomeform.salario_carteira.value == "") {
                    alert('por favor digite o Salario Carteira');
                    return false;
                }
                if (nomeform.salario_liquido.value == "") {
                    alert('por favor digite o Sálario Líquido');
                    return false;
                }
                if (nomeform.email.value == "" || nomeform.email.value.indexOf('@', 0) == -1 || nomeform.email.value.indexOf('.', 0) == -1)
                {
                    alert("Email invalido.");
                    return false;
                }
                if (nomeform.senha.value == "")
                {
                    alert("Por favor digite a senha.");
                    return false;
                }

                senha = document.f1.senha.value
                senha1 = document.f1.senha1.value
                if (senha != senha1 || senha == "") {
                    alert("senha não confere");
                    return false;
                }
                if (nomeform.estado.value == "") {
                    alert('por favor digite o Estado');
                    return false;
                }
                if (nomeform.uf.value == "") {
                    alert('por favor digite o UF');
                    return false;
                }
                if (nomeform.cep.value == "") {
                    alert('por favor digite o CEP');
                    return false;
                }
                if (nomeform.cidade.value == "") {
                    alert('por favor digite sua Cidade');
                    return false;
                }
                if (nomeform.endereco.value == "") {
                    alert('por favor digite o Endereço');
                    return false;
                }
                if (nomeform.numero.value == "") {
                    alert('por favor digite o Número');
                    return false;
                }
                if (nomeform.bairro.value == "") {
                    alert('por favor digite o Bairro');
                    return false;
                }
                if (nomeform.telefone.value == "") {
                    alert('por favor digite o Telefone');
                    return false;
                }
                if (nomeform.celular.value == "") {
                    alert('por favor digite o Celular');
                    return false;
                }
                alert("dados cadastrados com sucesso!!");
                return true;
            }

        </script>
        <?php
        include("linguagem.php");
        include("cabecalho.php");
        ?>
    </head>
    <?php include("menu.php") ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Cadastrar Funcionario</h1>
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
                                <div class="box-body">
                                    <div class="panel box box-primary"></div>             

                                    <form action="../modelo/inserefuncionario.php" method="post" name="f1" onSubmit="return valida_dados(this)">
                                        <div class="form-group has-feedback">
                                            <b>Nome Completo<font color="#FF0000" >*</font></b> 
                                            <input type="text"  class="form-control" name="nome" maxlength="60" placeholder="ex: Jose Maria da silva" onKeypress='return soLetras(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Apelido</b> 
                                            <input type="text"  class="form-control" name="apelido" maxlength="40" placeholder="ex: Jose Maria da silva" onKeypress='return soLetras(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Nome do Pai<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="nome_pai" class="form-control" placeholder="ex: João Pereira da Silva"  maxlength="60"    onKeypress='return soLetras(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Nome da Mãe<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="nome_mae" class="form-control" placeholder="ex: Maria Joaquina da Silva"  maxlength="60"   onKeypress='return soLetras(event)' />
                                        </div>
                                   
                                        <div class="form-group has-feedback">
                                            <b>Sexo<font color="#FF0000" >*</font></b> 
                                                <select name="sexo" class="form-control select2" style="width: 30%;">
                                                    <option>Masculino</option>
                                                    <option>Feminino</option>
                                                </select>
                                        </div>
                                
                                    
                                        <div class="form-group has-feedback">
                                            <b>CPF<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="cpf" class="form-control" placeholder="ex: 99999999999" maxlength="11" onkeypress='return soNumero(event)' />			
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>RG<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="rg" class="form-control" placeholder="ex: 99999999999"  maxlength="11"   onkeypress='return soNumero(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Órgão Emissor<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="orgao_emissor" class="form-control" placeholder="ex: SPP"  maxlength="11"   onKeypress='return soLetras(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Emissão RG<font color="#FF0000" >*</font></b> 
                                            <input type="date" name="emissao_rg" class="form-control"  />
                                        </div>
                                        <div class="form-group has-feedback" >
                                            <b>Data de Nascimento<font color="#FF0000" >*</font></b> 
                                            <input type="date" name="data_nascimento" class="form-control" />
                                        </div>
                                        <div class="form-group has-feedback" >
                                            <b>Escolaridade<font color="#FF0000" >*</font></b> 
                                            <select name="escolaridade" class="form-control select2" style="width: 30%;">
                                                <option>não estudei</option>
                                                <option>Ensino Fundamental Incompleto</option>
                                                <option>Ensino Fundamental Complento</option>
                                                <option>Ensino Médio Incompleto</option>
                                                <option>Ensino Médio Completo</option>
                                                <option>Ensino Superio Incompleto</option>
                                                <option>Ensino Superio Completo</option>
                                            </select>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Número da Carteira de Trabalho<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="NMcarteira_trabalho" class="form-control" placeholder="ex: 9999999"  maxlength="7"   onkeypress='return soNumero(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>PIS<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="pis" class="form-control" placeholder="ex: 99999999999"  maxlength="11"   onkeypress='return soNumero(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Data de Admisão<font color="#FF0000" >*</font></b> 
                                            <input type="date" name="data_admissao" class="form-control"  />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Cargo<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="cargo" class="form-control" placeholder="ex: Gerente"  maxlength="30"   onKeypress='return soLetras(event)' />
                                        </div>
                                        <?php
                                        // cria a instrução SQL que vai selecionar os dados
                                        $query = sprintf("SELECT * FROM setor");
                                        // executa a query
                                        $dados = mysqli_query($conexao, $query) or die(mysqli_error());
                                        // transforma os dados em um array
                                        $linha = mysqli_fetch_assoc($dados);
                                        // calcula quantos dados retornaram
                                        $total = mysqli_num_rows($dados);
                                        ?>
                                        <div class="form-group has-feedback">
                                            <b>Setor<font color="#FF0000" >*</font></b> 
                                            <select  name="setor" class="form-control select2" style="width: 30%;"   maxlength="11"   onKeypress='return soLetras(event)' />
                                            <option></option>
                                            <?php
                                            // se o número de resultados for maior que zero, mostra os dados
                                            if ($total > 0) {

                                                // inicia o loop que vai mostrar todos os dados
                                                do {
                                                    ?><option><?= $linha['nome_setor'] ?></option>

                                                    <?php
                                                    // finaliza o loop que vai mostrar os dados
                                                } while ($linha = @mysqli_fetch_assoc($dados)); //fimdo if
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Salário Base<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="salario_base" class="form-control" placeholder="ex: 99999999999"  maxlength="20"     />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Complemento Salarial<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="complemento_salarial" class="form-control" placeholder="ex: 99999999999"  maxlength="20"   />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Salário Carteira<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="salario_carteira" class="form-control" placeholder="ex: 99999999999"  maxlength="20"   />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Salario Líquido<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="salario_liquido" class="form-control" placeholder="ex: 99999999999"  maxlength="20"  />
                                        </div>
                                        <div class="form-group has-feedback" >
                                            <b>CNH</b> 
                                            <select name="cnh" class="form-control select2" style="width: 30%;">
                                                <option>não possui</option>
                                                <option>possui</option>
                                            </select>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Número de Registro da CNH</b> 
                                            <input type="text" name="numero_cnh" class="form-control" placeholder="ex: 99999999999"  maxlength="11"   onkeypress='return soNumero(event)' />
                                        </div>
                                        <div class="form-group has-feedback" >
                                            <b>Categoria da CNH</b> 
                                            <select name="categoria_cnh" class="form-control select2" style="width: 30%;">
                                                <option></option>
                                                <option>A</option>
                                                <option>AB</option>
                                                <option>AC</option>
                                                <option>AD</option>
                                                <option>AE</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>E</option>
                                            </select>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Validade CNH</b> 
                                            <input type="date" name="validade_cnh" class="form-control" />
                                        </div>
                                        <h3 class="box-title">Dados de Acesso</h3>
                                        <div class="panel box box-primary"></div>
                                        <br/>
                                        <div class="form-group has-feedback">
                                            <b>E-mail<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="email" class="form-control" placeholder="ex: exmeplo@gmail.com" maxlength="100"  />      
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Senha<font color="#FF0000" >*</font></b> 
                                            <input type="password" name="senha" class="form-control"  maxlength="20" />      
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Confirmação de Senha<font color="#FF0000" >*</font></b> 
                                            <input type="password" name="senha1" class="form-control"  maxlengthn"20" />      
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Nível de Acesso<font color="#FF0000" >*</font></b> 
                                            <select name="nivel" class="form-control select2" style="width: 30%;">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>

                                        <h3 class="box-title">Dados de Endereço</h3>
                                        <div class="panel box box-primary"></div>
                                        <br/>
                                        <div class="form-group has-feedback">
                                            <b>Estado<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="estado" class="form-control" placeholder="ex: Ceára"  maxlength="30"   onKeypress='return soLetras(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>UF<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="uf" class="form-control" placeholder="ex: CE"  maxlength="2"   onKeypress='return soLetras(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>CEP<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="cep" class="form-control"  maxlength="8"  placeholder="ex: 99999999" onkeypress='return soNumero(event)' />      
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Cidade<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="cidade" class="form-control" placeholder="ex: Brejo Santo"  maxlength="30"  onKeypress='return soLetras(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Endereço<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="endereco" class="form-control" placeholder="ex: rua da Aldeota" maxlength="40" onKeypress='return soLetras(event)' />      
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Complemento</b> 
                                            <input type="text" name="complemento" class="form-control"  maxlength="20"onKeypress='return soLetras(event)' />      
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Número<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="numero" class="form-control" placeholder="ex: 26"  maxlength="11" />      
                                        </div> 
                                        <div class="form-group has-feedback">
                                            <b>Bairro<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="bairro" class="form-control"  maxlength="40" placeholder="ex: centro" onKeypress='return soLetras(event)' />      
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Telefone<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="telefone" class="form-control" placeholder="ex: 99999999999"  maxlength="11"   onkeypress='return soNumero(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <b>Celular<font color="#FF0000" >*</font></b> 
                                            <input type="text" name="celular" class="form-control" placeholder="ex: 99999999999"  maxlength="11"   onkeypress='return soNumero(event)' />
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input type="submit" class="btn btn-primary" value="Cadastrar" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
    <?php include("rodape.php") ?>