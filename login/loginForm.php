<?php 
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>loginform</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container ">
                        <div class="row d-flex justify-content-center ">
                            <div class="col-lg-5 align-items-center ">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="login.php">
                                            <div class="row mb-3"> 
                                                <div class=" col-md-12"> <!-- username-->
                                                    <div class=" d-grid form-floating mb-3 mb-md-0">
                                                        <input name="usuario" class="form-control" id="inputUsuario" type="text"  />
                                                        <label for="usuario">Usuário</label>
                                                    </div>
                                                </div>
                                            </div>

                                    
                                            <div class="row mb-3"> <!--senha-->
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input name="senha"class="form-control" id="inputSenha" type="password"/>
                                                        <label for="inputSenha">Senha</label>
                                                    </div>
                                                </div>
                                              
                                            <div class="mt-4 mb-0 ">
                                                <div class="d-grid"><input type="submit" class="btn btn-primary btn-block"></input></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class=" text-center py-3">
                                        <div class="small"><a href="login.html">Cadastrar uma conta</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>
