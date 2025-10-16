<?php
require_once 'DB/Database.php';
require_once 'Controller/UsuarioController.php';
require_once 'Controller/ProdutoController.php';
require_once 'Controller/FormaPagamentoController.php';

$usuarioController = new UsuarioController($pdo);
$produtoController = new ProdutoController($pdo);
$FormaPagamentoController = new FormaPagamentoController($pdo);


$usuarios = $usuarioController->listar();
$produtos = $produtoController->listar();
$FormaPagamento = $FormaPagamentoController->listar();

?>