<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form method= "POST"> 
        <label>Nome: </label>
        <input type="text" name="nome" required />
        <br><br>
        
        <label>Tipo: </label>
        <input type="text" name="tipo" required />
        <br><br>
        
        <input type="submit" value="Cadastrar" />

    </form>
</body>
</html>

<?php
require_once 'c:/Turma1/xampp/htdocs/MVC/Controller/FormaPagamentoController.php';

$FormaPagamentoController = new FormaPagamentoController($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];

    $FormaPagamentoController->cadastrar($nome, $tipo);
    header("Location: ../../index.php");
}