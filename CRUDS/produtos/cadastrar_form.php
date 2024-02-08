<?php
session_start();
if(!isset ($_SESSION["usuario"])){
  header("Location:\projetoPOO\login\loginForm.php");
  die();
};

require('../../database/db_config.php');
require('../../template/header.php');
?>

<div class="container ">
    <div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-6 align-items-center ">
        <div class="card border-0 rounded-lg mt-5">
            <div class="text-primary"><h1 class="text-center font-weight-light my-4">Cadastrar Produto</h1></div>
            <div class="card-body">
                <form method="post" action="cadastrar.php">
                    <div class="row mb-3">                         
                        <div class=" form-floating mb-3"> 
                            <div class=" d-grid form-floating mb-3 mb-md-0">
                                <input name="nome" class="form-control" id="inputNome" type="text"  />
                                <label for="inputNome">Nome</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3"> 
                        <div class="col-md-6">                        
                            <div class=" form-floating mb-3"> 
                                <div class=" d-grid form-floating mb-3 mb-md-0">
                                    <input name="quantidade" class="form-control" id="inputQuantidade" type="number"/>
                                    <label for="inputQuantidade">Quantidade</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">                        
                            <div class=" form-floating mb-3"> 
                                <div class=" d-grid form-floating mb-3 mb-md-0">
                                    <input name="preco" class="form-control" id="inputPreco" type="number" step=".01"  />
                                    <label for="inputPreco">Preço</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-2 mb-4 d-flex justify-content-center">
                        <a href="listar_produtos.php" class="btn btn-danger"> Cancelar</a>
                        <button class="btn btn-success ms-4" type="submit"> Salvar</button>
                    </div>

                    

     </div>                                
                                                                 
<?php
require('../../template/footer.html') 

?>