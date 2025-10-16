<?php

class FormaPagamentoModel {
    private $pdo;

    public function __construct( PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function buscarTodos() {
        $stmt = $this->pdo->query("SELECT * FROM formapagamento");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrar($nome, $tipo) {
        $sql = "INSERT INTO formapagamento (nome, tipo) VALUES (:nome, :tipo)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome, 
            ':tipo' => $tipo
         ]);
    }

    public function buscarPagamento($id) {
        $stmt = $this->pdo->query("SELECT * FROM formapagamento WHERE id = $id");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function editar($nome, $tipo, $id) {
        $sql = "UPDATE formapagamento SET nome = ?, tipo= ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nome, $tipo, $id]);
        
      
    }

    public function deletar ($id) {
        $sql = " DELETE FROM formapagamento WHERE id = ? ";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}