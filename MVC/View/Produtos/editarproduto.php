<?php

require_once 'C:/Turma1/xampp/htdocs/MVC/DB/Database.php';
require_once 'C:/Turma1/xampp/htdocs/MVC/Controller/ProdutoController.php'; 

$ProdutoController = new ProdutoController($pdo);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produto = $ProdutoController->buscarProduto($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <form method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" value="<?= $produto['nome'] ?>" required />
        <br><br>
        <label for="descricao">Descrição: </label>
        <input type="text" name="descricao" value="<?= $produto['descricao'] ?>" required />
        <br><br>        
        <label for="quantidade">Quantidade: </label>
        <input type="text" name="quantidade" value="<?= $produto['quantidade'] ?>" required />
        <br><br>
        <label for="codigo">Código de Barra: </label>
        <input type="text" name="codigo" value="<?= $produto['codigo'] ?>" required />
        <br><br>
        <label for="preco">Preço: </label>
        <input type="text" name="preco" value="<?= $produto['preco'] ?>" required />
        <br><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
}
else {
    header("Location: listarproduto.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];
    $codigo = $_POST['codigo'];
    $preco = $_POST['preco'];
    $id = $_GET['id'];

    $ProdutoController->editar($nome, $descricao, $quantidade, $codigo, $preco, $id);
    header("Location: ../../index.php");
}