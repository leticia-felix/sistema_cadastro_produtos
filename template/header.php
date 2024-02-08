<?php
    // session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistema WEB</title>
        <link href="/projetoPOO/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/projetoPOO/index.php">Sistema WEB</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
           
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto d-none d-md-inline-block me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                        <?php echo $_SESSION["usuario"];?>
                        <!-- <?php echo var_dump($_SESSION["usuario"]);?> -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configurações</a></li>
                        <li><a class="dropdown-item" href="#!">Histórico</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="/projetoPOO/login/loginForm.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav" >
            <div id="layoutSidenav_nav" >
                <nav class="sb-sidenav accordion sb-sidenav-dark " id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Paineis</div>
                            <a class="nav-link" href="/projetoPOO/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Painel Principal
                            </a>
                            
                            <div class="sb-sidenav-menu-heading">Listagem</div>
                            <a class="nav-link" href="/projetoPOO/CRUDS/produtos/listar_produtos.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-box"></i></div>
                                Produtos
                            </a>
                            <a class="nav-link" href="/projetoPOO/CRUDS/funcionarios/listar_funcionario.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                                Funcionários
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $_SESSION["usuario"];?> <!--Nome do usuario da sessão-->
                    </div>
                </nav>
            </div>
            
            <div id="layoutSidenav_content">
            <main>
                    
              
                
                