<!DOCTYPE HTML>
<html>
    <head>
        <title>SGD</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta rel="stulisheet" href="visao/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="visao/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="visao/dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="visao/dist/css/skins/_all-skins.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="visao/plugins/iCheck/flat/blue.css">
        <!-- Morris chart -->
        <link rel="stylesheet" href="visao/plugins/morris/morris.css">
        <!-- jvectormap -->
        <link rel="stylesheet" href="visao/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
        <!-- Date wysihtml5.min.css">
        <link rel="stylesheet" href="dist/css/main.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>Picker -->
        <link rel="stylesheet" href="visao/plugins/datepicker/datepicker3.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="visao/plugins/daterangepicker/daterangepicker.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="visao/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link rel="stylesheet" href="visao/dist/css/main.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script language="javascript">

            function valida_dados_login(loginform)
            {
                if (loginform.email.value == "")
                {
                    alert("Por favor digite seu email.");
                    return false;
                }
                if (loginform.senha.value == "")
                {
                    alert("Por favor digite sua senha.");
                    return false;
                }
                return true;
            }
        </script>
        <script language="javascript">
            //chama a função (nomeform) -->
            function valida_dados_contato(nomeform)
            {
                if (nomeform.nome.value == "")
                {
                    alert("Por favor digite o nome");
                    return false;
                }
                if (nomeform.email.value == "")
                {
                    alert("Por favor digite o seu email ");
                    return false;
                }
                if (nomeform.mensagem.value == "")
                {
                    alert("Por favor digite uma mensagem ");
                    return false;
                }

                alert("mensagem enviada com sucesso!!");
                return true;
            }
        </script>

        <script language="javascript">
            function valida_dados_cadastro(loginform)
            {
                if (loginform.nome.value == "")
                {
                    alert("Por favor digite seu nome.");
                    return false;
                }
                if (loginform.email.value == "")
                {
                    alert("Por favor digite seu E-mail.");
                    return false;
                }
                if (loginform.senha.value == "")
                {
                    alert("Por favor digite a senha.");
                    return false;
                }
                senha = document.f1.senha.value
                senha1 = document.f1.senha1.value
                if (senha != senha1 || senha == "")
                {
                    alert("senha não confere");
                    return false;
                }
                alert("dados salvo com sucesso");
                return true;
            }
        </script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 800);
                });
            });
        </script>
    </head>
    <body class="hold-transition skin-blue layout-top-nav">
        <div class="wrapper"></div> 
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="index.php" class="navbar-brand"><b>SGD</b></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="#header"  class="scroll">Inicio</a></li>
                            <li><a href="#contact" class="scroll">Contatos</a></li>
                            <li><a href="#four" class="scroll">Cadastre-se</a></li>
                        </ul>
                    </div>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs">Login</span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">
                                        <form action="modelo/login.php" method="POST" onSubmit="return valida_dados_login(this)">
                                            <div class="form-group has-feedback">
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <input type="password" name="senha" class="form-control" placeholder="Senha">
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                            </div>
                                        
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="checkbox icheck">
                                                        <label><input type="checkbox" name="r1" class="minimal">Lembre-me</label>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left ">
                                            <input  class="btn btn-default btn-flat" type="submit" value="Login"/>
                                        </div>
                                        <div class="pull-right">
                                            <a class="btn btn btn-success btn-sm dropdown-toggle btn-info btn-lg" data-toggle="modal" data-target="#myModal">Esqueci a senha</a>
                                        </div>
                                    </li>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>

            </nav>
        </header>
        <section id="header" >
            <div class="inner">

                <center><span ><h1><strong></strong><font color="#696969">SGD</font></h1></strong><br></span></center>
                SGD é um sistema voltado para pequenas empresas que serve como auxilio <br/>na gestão de recursos humanos, em relação ao modo do gerenciamento de dados <br/>dos colaboradores e que permite, de forma que as organizações gerem <br/>melhor o seu capital humano.

            </div>
        </section>
         <section id="one" class="main style1">
            <div class="container">
                <div class="row 150%">
                    <div class="6u 12u(medium)">
                        <header class="major">
                            <h2>O sistema SGD tem
                                diversas<br /> vantagem que você pode ver</h2>
                        </header>
                        <p>O sistema possibilita uma forma melhor do gerenciamento a coleta de dados dos funcionários;</p>
                        <p>O sistema terá recebimentos de feedback dos funcionários por meio de avaliação 360º;</p>
                        <p>O sistema tem ferramentas que ajudam no calculo de rotatividade e relatórios de desligamentos, por parte dos funcionários, como mais um auxilio sobre a rotatividade de pessoal;</p>
                        
                    </div>
                    <div class="6u 12u(medium) important(medium)">
                        <span class="image fit"><img src="visao/dist/img/5.png" alt="" /></span>
                    </div>
                </div>
            </div>
        </section>

       <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2><font color="#FFFFFF">Contato</font></h2>
                        <hr class="star-primary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="sentMessage" id="contactForm" novalidate method="post" action="modelo/emailcontato.php" onSubmit="return valida_dados_contato(this)">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label><font color="#FFFFFF">Nome</font></label>
                                    <input type="text" class="form-control" placeholder="nome" name="nome" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label><font color="#FFFFFF">E-mail</font></label>
                                    <input type="email" class="form-control" placeholder="E-mail" name="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label><font color="#FFFFFF">Mensagem</font></label>
                                    <textarea rows="5" class="form-control" placeholder="Mensagem" name="mensagem" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Recuperar Senha</h4>
                    </div>
                    <div class="modal-body">
                        <form action="modelo/salvarNota.php" method="post">
                            <div class="form-group has-feedback">
                                <b>E-mail<font color="#FF0000" >*</font></b> 
                                <input type="email"  class="form-control" name="email" maxlength="40" placeholder="ex: jose@gmail.com"  />
                            </div>
                            <div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Enviar"/>

                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- parte dos cadastro -->
        <section id="four" class="main style1 special ">
            <div class="container">
                <header class="major">
                    <h2>Quer experimente nosso sistema por 15 dias(grátis)</h2>
                </header>
                <ul class="actions uniform">
                    <li><a class="button"data-toggle="modal" data-target="#ModalC">Cadastre-se</a></li>
                </ul>
            </div>
        </section>



        <!-- Rodapé -->
        <section id="footer">
            <ul class="icons">
                <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <ul class="copyright">
                <li>&copy; Distribuição NewQuip</li><li><a href="#">NewQuip</a></li>
            </ul>
        </section>

        <div id="ModalC" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">cadastro</h4>
                    </div>
                    <div class="modal-body">
                        <form action="modelo/salvarCadasto.php" method="post" name="f1" onSubmit="return valida_dados_cadastro(this)">
                            <div class="form-group has-feedback">
                                <b>Nome<font color="#FF0000" >*</font></b> 
                                <input type="nome"  class="form-control" name="nome" maxlength="40" placeholder="ex: jose dos santos "  />
                            </div>
                            <div class="form-group has-feedback">
                                <b>E-mail<font color="#FF0000" >*</font></b> 
                                <input type="email"  class="form-control" name="email" maxlength="40" placeholder="ex: jose@gmail.com"  />
                            </div>
                            <div class="form-group has-feedback">
                                <b>Senha<font color="#FF0000" >*</font></b> 
                                <input type="password"  class="form-control" name="senha" maxlength="40" />
                            </div>
                            <div class="form-group has-feedback">
                                <b>Repetir senha<font color="#FF0000" >*</font></b> 
                                <input type="password"  class="form-control" name="senha1" maxlength="40" />
                            </div>
                            <div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="CADASTRAR"/>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Scripts -->
        <script src="visao/dist/js/jquery.min.js"></script>
        <script src="visao/dist/js/jquery.scrolly.min.js"></script>
        <script src="visao/dist/js/skel.min.js"></script>
        <script src="visao/dist/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="visao/dist/js/main.js"></script>
        <!-- jQuery 2.2.3 -->
        <script src="visao/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
                            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.6 -->
        <script src="visao/bootstrap/js/bootstrap.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="visao/plugins/morris/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="visao/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="visao/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="visao/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="visao/plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
        <script src="visao/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="visao/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="visao/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="visao/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="visao/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="visao/dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="visao/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="visao/dist/js/demo.js"></script>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js'></script>

    </body>
</html>
