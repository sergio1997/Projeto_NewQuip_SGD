    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="../visao/pagina_inicial.php" class="logo">
                    <span class="logo-mini"><b>S</b>GD</span>
                    <span class="logo-lg"><b>SGD</b></span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="pagina_inicial.php">Inicio</a></li>
                            <li><a href="#">Suporte</a></li>
                            <li><a href="#">Ajuda</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li><a  " ><?php echo $logado ?></a></li>
                            <li><a  href="../controle/logout.php" >» Logout</a></li>
                            <li class="dropdown user user-menu">
                                <ul class="dropdown-menu">
                                    <div class="navbar-custom-menu">
                                        <ul class="nav navbar-nav">
                                        </ul>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar" >
                    <ul class="sidebar-menu">
                        <li class="header">Menu</li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-calendar-check-o"></i> <span>Agenda de tarefas</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="../visao/Agendar.php">Agendar Tarefa</a></li>
                                <li><a href="../visao/listartarefas.php">Listar Tarefas</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="glyphicon glyphicon-pencil"></i> <span>Avaliação</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="../visao/formulario1.php">Avaliação 1</a></li>
                                <li><a href="../visao/formulario2.php">Avaliação 2</a></li>
                                <li><a href="../visao/formulario3.php">Avaliação 3</a></li>
                                <li><a href="../visao/informações.php">Informações da Avaliação</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-off"></i> <span>Desligamento</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../visao/desligamento.php">Desligar funcionário</a></li>
                            </ul>
                        </li>    
                        <li class="treeview">
                            <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>Férias</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="../visao/agedarFerias.php">Agendar Férias</a></li>
                                <li><a href="../visao/listarFerias.php.php">Listar Férias</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i> <span>Funcionário</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="CadastrarFuncionario.php">Cadastar Funcionário</a></li>
                                <li><a href="../visao/Funcionario.php">Lista Funcionário</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-comments"></i> <span>Reuniões</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="../visao/listarReuniao.php">Listar setores</a></li>
                                <li><a href="../visao/MarcarRuniao.php">Marcar Reunião</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-group"></i> <span>Setores</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="../visao/CadastraGrupo.php">Cadastrar setor</a></li>
                                <li><a href="../visao/ListaGrupo.php">Listar setores</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#"><i class="fa fa-graduation-cap"></i> <span>Treinamento</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="../visao/adicionarTreinamento.php">Adicionar Treinamento</a></li>
                                <li><a href="../visao/listarTreinamento.php">Lista treinamento</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>
