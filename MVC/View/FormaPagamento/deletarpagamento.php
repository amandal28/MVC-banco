<?php
require_once 'C:/Turma1/xampp/htdocs/MVC/DB/Database.php';
require_once 'C:/Turma1/xampp/htdocs/MVC/Controller/FormaPagamentoController.php'; 

$FormaPagamentoController = new FormaPagamentoController($pdo);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $FormaPagamento = $FormaPagamentoController->deletar($id);
     header("Location: ../../index.php");
} else {
    header("Location: ../../index.php");
}
?>