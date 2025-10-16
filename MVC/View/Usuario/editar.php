<?php

require_once 'C:/Turma1/xampp/htdocs/MVC/DB/Database.php';
require_once 'C:/Turma1/xampp/htdocs/MVC/Controller/UsuarioController.php'; 

$usuarioController = new usuarioController($pdo);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario = $usuarioController->buscarUsuario($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <form method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required />
        <br><br>
        <label for="email">Email: </label>
        <input type="email" name="email" value="<?= $usuario['email'] ?>" required />
        <br><br>        
        <label for="senha">Senha: </label>
        <input type="password" name="senha" value="<?= $usuario['senha'] ?>" required />
        <br><br>
        <input type="submit">
    </form>
</body>
</html>

<?php
}
else {
    header("Location: listar.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuarioController->editar( $nome, $email, $senha, $id);
    header("Location: ../../index.php");
}