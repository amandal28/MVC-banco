<?php

class ProdutoModel {
    private $pdo;

    public function __construct( PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function buscarTodos() {
        $stmt = $this->pdo->query("SELECT * FROM produtos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrar($nome, $descricao, $quantidade, $codigo, $preco ) {
        $sql = "INSERT INTO produtos (nome, descricao, quantidade, codigo, preco) VALUES (:nome, :descricao, :quantidade, :codigo, :preco)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome, 
            ':descricao' => $descricao, 
            ':quantidade' => $quantidade,
            ':codigo' => $codigo,
            ':preco' => $preco
         ]);
    }

    public function buscarProduto($id) {
        $stmt = $this->pdo->query("SELECT * FROM produtos WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editar($nome, $descricao, $quantidade, $codigo, $preco, $id) {
        $sql = "UPDATE produtos SET nome = ?, descricao = ?, quantidade = ?, codigo = ?, preco= ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $descricao, $quantidade, $codigo, $preco, $id]);
        
      
    }

    public function deletar ($id) {
        $sql = " DELETE FROM produtos WHERE id = ? ";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}