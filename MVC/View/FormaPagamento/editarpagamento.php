<?php

require_once 'C:/Turma1/xampp/htdocs/MVC/DB/Database.php';
require_once 'C:/Turma1/xampp/htdocs/MVC/Controller/FormaPagamentoController.php'; 

$FormaPagamentoController = new FormaPagamentoController($pdo);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $FormaPagamento = $FormaPagamentoController->buscarPagamento($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Forma de Pagamento</title>
</head>
<body>
    <form method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" value="<?= $FormaPagamento['nome'] ?>" required />
        <br><br>

        <label for="tipo">Tipo: </label>
        <input type="text" name="descricao" value="<?= $FormaPagamento['tipo'] ?>" required />
        <br><br>        
        
        <input type="submit">
    </form>
</body>
</html>

<?php
}
else {
    header("Location: listarpagamento.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $id = $_GET['id'];

    $FormaPagamentoController->editar( $nome, $tipo, $id);
    header("Location: ../../index.php");
}