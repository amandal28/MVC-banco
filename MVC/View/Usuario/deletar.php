<?php
require_once 'C:/Turma1/xampp/htdocs/MVC/DB/Database.php';
require_once 'C:/Turma1/xampp/htdocs/MVC/Controller/UsuarioController.php'; 

$usuarioController = new usuarioController($pdo);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario = $usuarioController->deletar($id);
     header("Location: ../../index.php");
} else {
    header("Location: ../../index.php");
}
?>
