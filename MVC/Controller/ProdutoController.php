<?php
require_once 'C:/Turma1/xampp/htdocs/MVC/DB/Database.php';

require_once 'C:/Turma1/xampp/htdocs/MVC/Model/ProdutoModel.php';

class ProdutoController {
    private $ProdutoModel;

    public function __construct($pdo) {
        $this->ProdutoModel = new ProdutoModel($pdo);
    }

    public function listar() {
        $produtos = $this->ProdutoModel->buscarTodos();
        include_once 'C:/Turma1/xampp/htdocs/MVC/View/Produtos/listarproduto.php';
        return $produtos;
} 

    public function cadastrar($nome, $descricao, $quantidade, $codigo, $preco ) {
       return $this->ProdutoModel->cadastrar($nome, $descricao, $quantidade, $codigo, $preco);

    }

    public function editar($nome, $descricao, $quantidade, $codigo, $preco,  $id) {
        return $this->ProdutoModel->editar($nome, $descricao, $quantidade, $codigo, $preco, $id);
    }
    public function buscarProduto($id) {
        $produto = $this->ProdutoModel->buscarProduto($id);
        return $produto;}


    public function deletar($id) {
        $produto= $this-> ProdutoModel -> deletar ($id);
        return $produto;
    }
}
?>
