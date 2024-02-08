<?php 
session_start();
if(!isset ($_SESSION["usuario"])){
  header("Location:\projetoPOO\login\loginForm.php");
  die();
};
require('../../database/db_config.php');
require('../../template/header.php');

// Verifica se o ID do produto foi passado via GET
if (!isset($_GET['id']) || empty($_GET['id'])) {
    // Redireciona de volta para a lista de produtos se o ID não estiver presente ou for inválido
    header("Location: listar_produtos.php");
    exit();
}

$produto_id = $_GET['id'];

// Verifica se o valor do ID é um número válido
if (!is_numeric($produto_id)) {
    // Redireciona de volta para a lista de produtos se o ID não for válido
    header("Location: listar_produtos.php");
    exit();
}

// Obtém as informações do produto para exibir no formulário
try {
    $stmt = $PDO->prepare("SELECT * FROM produtos WHERE id = :produto_id");
    $stmt->bindParam(':produto_id', $produto_id);
    $stmt->execute();
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
    exit();
}

// Verifica se o formulário de edição foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['atualizar_produto'])) {
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];

    // Atualiza as informações do produto no banco de dados
    try {
        $stmt = $PDO->prepare("UPDATE produtos SET nome = :nome, quantidade = :quantidade, preco = :preco WHERE id = :produto_id");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':produto_id', $produto_id);
        $stmt->execute();

        // Redireciona para a lista de produtos após a atualização
        header("Location: listar_produtos.php?atualiza_dados=true");
        exit();
       
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
        exit();
    }
}
?>

<div class="container ">
    <div class="row d-flex justify-content-center align-items-center">
    <div class="col-lg-6 align-items-center ">
        <div class="card border-0 rounded-lg mt-5">
            <div class="text-primary"><h1 class="text-center font-weight-light my-4">Cadastrar Produto</h1></div>
            <div class="card-body">
                <form method="post" action="editar_produto.php?id=<?= $produto_id ?>">
                    <div class="row mb-3">                         
                        <div class=" form-floating mb-3"> 
                            <div class=" d-grid form-floating mb-3 mb-md-0">
                                <input name="nome" class="form-control" id="inputNome" type="text" value="<?= $produto['nome'] ?>"  />
                                <label for="inputNome">Nome</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3"> 
                        <div class="col-md-6">                        
                            <div class=" form-floating mb-3"> 
                                <div class=" d-grid form-floating mb-3 mb-md-0">
                                    <input name="quantidade" class="form-control" id="inputQuantidade" value="<?= $produto['quantidade'] ?>"type="number"/>
                                    <label for="inputQuantidade">Quantidade</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">                        
                            <div class=" form-floating mb-3"> 
                                <div class=" d-grid form-floating mb-3 mb-md-0">
                                    <input name="preco" class="form-control" id="inputPreco" type="number" value="<?= $produto['preco'] ?>"step=".01"  />
                                    <label for="inputPreco">Preço</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mt-2 mb-4 d-flex justify-content-center">
                        <a href="listar_produtos.php" class="btn btn-danger"> Cancelar</a>
                        <button class="btn btn-success ms-4" name="atualizar_produto" type="submit"> Atualizar</button>
                    </div>

                    

     </div>                                
                                                                 
<?php
require('../../template/footer.html') 

?>