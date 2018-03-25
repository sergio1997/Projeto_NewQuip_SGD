<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Next Job</title>
        <!-- Parte responsiva -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Fontes -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- icones -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tema -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

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
    </head>
    <body class="hold-transition skin-blue layout-top-nav">
        <div class="wrapper">

            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="../../index2.html" class="navbar-brand"><b>SGD</b></a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="#">Suporte</a></li>
                                <li><a href="#">Contatos</a></li>
                            </ul>
                        </div>

                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="hidden-xs">Login</span>
                                    </a>
                                    <ul class="dropdown-menu">

                                        <li class="user-header">
                                            <form action="../modelo/login.php" method="POST" onSubmit="return valida_dados_login(this)">
                                                <div class="form-group has-feedback">
                                                    <input type="email" name="email"class="form-control" placeholder="Email">
                                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <input type="password" name="senha" class="form-control" placeholder="Senha">
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                        <div class="checkbox icheck">
                                                            <label>
                                                                <input type="checkbox">Lembre-me
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>

                                        <li class="user-footer">
                                            <div class="pull-left ">

                                                <input  class="btn btn-default btn-flat" type="submit" value="login"/>
                                            </div>
                                            <div class="pull-right">
                                                <a href="#" class="btn btn-default btn-flat">Esqueci a senha</a>
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
            <div class="content-wrapper">
                <section class="content">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="box-header with-border">
                                <img src="dist/img/Ban.png">
                            </div>
                        </div>

                        <!--Parte dos slides-->
                        <div class="col-md-7">
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="dist/img/Exo.png" alt="First slide">

                                                <div class="carousel-caption">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="dist/img/Cor.png" alt="Second slide">

                                                <div class="carousel-caption">
                                                </div>
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                            <span class="fa fa-angle-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                            <span class="fa fa-angle-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="box-header with-border">
                                <img src="dist/img/Ban.png">
                            </div>
                        </div>
                    </div>

                </section>
            </div>

            <!-- Rodapé -->
            <footer class="main-footer">
                <div class="container">
                    <div class="pull-right hidden-xs">
                        <b>Versão</b> 0.9
                    </div>
                    <strong>Copyright &copy; 2018 <a href="#">NewQuip</a>.</strong> Todos os direitos reservados.
                </div>
            </footer>
            <!--Fim do Rodapé -->

            <!-- jQuery 2.2.0 -->
            <script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
            <!-- Bootstrap 3.3.5 -->
            <script src="bootstrap/js/bootstrap.min.js"></script>
            <!-- SlimScroll -->
            <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
            <!-- FastClick -->
            <script src="plugins/fastclick/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/app.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="dist/js/demo.js"></script>
    </body>
</html>
