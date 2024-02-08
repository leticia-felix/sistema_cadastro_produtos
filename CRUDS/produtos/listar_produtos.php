<script>

function excluir_prod(id){

var confirme = confirm("Tem certeza que quer deletar o produto com ID " + id + "?");

if (confirme){

window.location.href ="deletar_produto.php?id=" + id;

  }
}
</script>
<?php 
session_start();
if(!isset ($_SESSION["usuario"])){
  header("Location:\projetoPOO\login\loginForm.php");
  die();
};
require('../../database/db_config.php');

require('../../template/header.php');

$SQL = "SELECT COUNT(id) FROM produtos";
    
$stmt =$PDO->prepare($SQL);
$stmt -> execute();
$countprod= $stmt -> fetchColumn();

$possuiproduto=false;




?>
<div class="m-4">
  <div class=" ">
         <h1 class="mt-4 text-primary">Produtos</h1>            
   </div>
<?php
   if (isset($_GET['atualiza_dados']) && $_GET['atualiza_dados'] === 'true') {
          echo '<div class="text-center mb-3"></div>
          <div class="alert alert-success alert-dismissible container">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Os dados foram atualizados !</strong> 
            </div> ';
}?>
  <div class="d-flex align-items-center justify-content-between mt-4">
  <h2>  <a href="listar_produtos.php"class=" text-primary" style="text-decoration:none; font-size:2rem"> <i class="fa fa-refresh text-primary" aria-hidden="true"></i>Produtos: </a><?php echo $countprod ?> </h2>

  <div class=" ">
    <a href="cadastrar_form.php">
        <button type="button" class="btn btn-success btn-lg">Cadastrar</button>
    </a>
  </div>

  
  </div>
    


  <table class="mt-4 table table-bordered table-striped mb-10">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Preço</th>
      <th scope="col">Ações</th>
    </tr>
    </thead>
  <tbody>

  <?php 
    $stmt = $PDO -> query('SELECT * FROM produtos');
    $produtos = $stmt -> fetchAll (PDO:: FETCH_OBJ);

    if($produtos){

      $possuiproduto = true;
        foreach ($produtos as $produto){
        echo '<tr>';
        echo '<th scope="row">' . $produto->id . '</th>';
        echo '<td>' . $produto->nome . '</td>';
        echo '<td>' . $produto->quantidade . '</td>';
        echo '<td> R$ ' . $produto->preco .'</td>';
    
        echo '<td class="d-flex justify-content-center"> 
        <a type="button" onclick="excluir_prod('.$produto->id.')" class="btn btn-danger me-2">Deletar</a> 
        <a type="button" href="editar_produto.php?id='.$produto->id.'"class="btn btn-warning">Editar</a> </td>';
        
      }
    }
    else{?>
      <div>

        <div class="alert alert-danger text-center m-4">
            <h1>Nenhum produto cadastrado no sistema!</h1> 
        </div>                 
    </div>
    <?php
    };
  ?>
    
  </tbody>
</table>


</div>
<?php require('../../template/footer.html') ?>