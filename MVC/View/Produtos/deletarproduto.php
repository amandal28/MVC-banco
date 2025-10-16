<?php
require_once 'C:/Turma1/xampp/htdocs/MVC/DB/Database.php';
require_once 'C:/Turma1/xampp/htdocs/MVC/Controller/ProdutoController.php'; 

$ProdutoController = new $ProdutoController($pdo);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produtos = $ProdutoController->deletar($id);
     header("Location: ../../index.php");
} else {
    header("Location: ../../index.php");
}
?>
