<?php 
session_start();
require ('../database/db_config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST["usuario"])  &&  isset($_POST["senha"]) ){

        $usuario=$_POST["usuario"];
        $senha=$_POST["senha"];
    
        $SQL = "SELECT * FROM admin WHERE usuario =:usuario AND senha=:senha";
    
        $stmt =$PDO->prepare($SQL);
        $stmt -> bindParam(':usuario',$usuario);
        $stmt -> bindParam(':senha',$senha);
        $stmt -> execute();
        //Consulta
    }
    
    
    if($stmt->rowCount()==1){
        //login bem-sucedido
        $_SESSION["usuario"]=$usuario;
        header("Location:/projetoPOO/index.php");
        exit;
    }
    else { 
        ?> <div class="text-center mb-3"></div>
        <div class="alert alert-danger alert-dismissible container">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Login ou senha incorretos!</strong> tente novamente.
        </div> 

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
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
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
                                                        <input name="senha"class="form-control" id="inputSenha" type="pasword"/>
                                                        <label for="inputSenha">Senha</label>
                                                    </div>
                                                </div>
                                              
                                            <div class="mt-4 mb-0 ">
                                                <div class="d-grid"><input type="submit" class="btn btn-primary btn-block"></input></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class=" text-center py-3">
                                        <div class="small"><a href="#">Cadastrar uma conta</a></div>
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


<?php        
        
    }
}
?>
