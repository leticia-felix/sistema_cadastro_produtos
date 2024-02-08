<?php
session_start();
require('../../database/db_config.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
   
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];

    if (empty($nome) || empty($quantidade) || empty($preco)) {

        require('cadastrar_form.php');
        ?> <div class="text-center m-3"></div>
        <div class="alert alert-danger alert-dismissible container">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Prencha Todos os Campos !</strong> tente novamente.
        </div>

        <?php
        exit;
    }
    try {
        
        $SQL = "INSERT INTO produtos (quantidade, nome, preco) VALUES (:quantidade,:nome, :preco)";
        $stmt = $PDO->prepare($SQL);

        // Vincula os parâmetros
        $stmt->bindParam(':quantidade', $quantidade);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':preco', $preco);

        
        $stmt->execute();

        
        header("Location:listar_produtos.php?atualiza_dados=true");
        exit();
    } catch (PDOException $e) {
  
        echo "Erro: " . $e->getMessage();
    }
}
?>