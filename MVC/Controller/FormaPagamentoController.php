<?php
require_once 'C:/Turma1/xampp/htdocs/MVC/DB/Database.php';

require_once 'C:/Turma1/xampp/htdocs/MVC/Model/FormaPagamentoModel.php';

class FormaPagamentoController {
    private $FormaPagamentoModel;

    public function __construct($pdo) {
        $this->FormaPagamentoModel = new FormaPagamentoModel($pdo);
    }

    public function listar() {
        $FormaPagamentos = $this->FormaPagamentoModel->buscarTodos();
        include_once 'C:/Turma1/xampp/htdocs/MVC/View/FormaPagamento/listarpagamento.php';
        return $FormaPagamentos;
    } 

    public function cadastrar($nome, $tipo) {
       return $this->FormaPagamentoModel->cadastrar($nome, $tipo);

    }

    public function editar($nome, $tipo, $id) {
        return $this->FormaPagamentoModel->editar($nome, $tipo, $id);
    }

    public function buscarPagamento($id) {
        $FormaPagamento = $this->FormaPagamentoModel->buscarPagamento($id);
        return $FormaPagamento;}


    public function deletar($id) {
        $FormaPagamento= $this-> FormaPagamentoModel -> deletar ($id);
        return $FormaPagamento;
    }
}
?>