<?php 
require('../../database/db_config.php');

$id = $_GET["id"];

try {
    $query = "DELETE FROM Produtos WHERE id = :id";
    $stmt = $PDO->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    header("Location: listar_produtos.php?atualiza_dados=true");
    exit();
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
    exit();
}
?>