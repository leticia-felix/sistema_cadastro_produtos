<?php 
session_start();
if(!isset ($_SESSION["usuario"])){
  header("Location:\projetoPOO\login\loginForm.php");
  die();
};
require ('database\db_config.php');


//contagem de produtos
$SQL = "SELECT COUNT(id) FROM produtos";
    
$stmt =$PDO->prepare($SQL);
$stmt -> execute();
$countprod= $stmt -> fetchColumn();

//contagem de funcionários
$SQL = "SELECT COUNT(id) FROM funcionarios";
    
$stmt =$PDO->prepare($SQL);
$stmt -> execute();
$countfuncionarios= $stmt -> fetchColumn();


require('template/header.php');?>

<div>
    <div class="m-4">
         <h1 class="mt-4 text-primary">Página Inicial</h1>          
    </div>
</div>


<div class="d-flex">
  
<div class="col-xl-4 col-md-4 m-4 ">
    <div class="card bg-primary text-white mb-4">
        <div class="card-body"><h3>Produtos: 
            <?php echo $countprod ?>
        </h3></div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="/projetoPOO/CRUDS/produtos/listar_produtos.php">Ver detalhes</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
</div>

<div class="col-xl-4 col-md-4 m-4">
    <div class="card bg-success text-white mb-4">
        <div class="card-body">
            <h3>Funcionários: 
            <?php echo $countfuncionarios ?>
            </h3>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-white stretched-link" href="/projetoPOO/CRUDS/funcionarios/listar_funcionario.php">Ver detalhes</a>
            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
</div>

</div>
                            



<?php require('template/footer.html') ?>



