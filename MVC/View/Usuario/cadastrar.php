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
        
        <label>Email: </label>
        <input type="email" name="email" required />
        <br><br>
        
        <label>Senha: </label>
        <input type="password" name="senha" required />
        
        <input type="submit" value="Cadastrar" />

    </form>
</body>
</html>

<?php
require_once 'c:/Turma1/xampp/htdocs/MVC/Controller/UsuarioController.php';

$UsuarioController = new UsuarioController($pdo);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $UsuarioController->cadastrar($nome, $email, $senha);
    header("Location: ../../index.php");
}