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
        
        <label>Descrição: </label>
        <input type="text" name="descricao" required />
        <br><br>

        <label>Quantidade: </label>
        <input type="text" name="quantidade" required />
        <br><br>

        <label>Código de Barras: </label>
        <input type="text" name="codigo" required />
        <br><br>

        <label>Preço: </label>
        <input type="text" name="preco" required />
        <br><br>
        
        <input type="submit" value="Cadastrar" />

    </form>
</body>
</html>

<?php
require_once 'c:/Turma1/xampp/htdocs/MVC/Controller/ProdutoController.php';

$ProdutoController = new ProdutoController($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $codigo = $_POST['codigo'];
    $preco = $_POST['preco'];

    $ProdutoController->cadastrar($nome, $descricao, $quantidade, $codigo, $preco);
    header("Location: ../../index.php");
}