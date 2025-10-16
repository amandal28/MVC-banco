<?php
require_once 'C:/Turma1/xampp/htdocs/MVC/DB/Database.php';

require_once 'C:/Turma1/xampp/htdocs/MVC/Model/UsuarioModel.php';

class UsuarioController {
    private $usuarioModel;

    public function __construct($pdo) {
        $this->usuarioModel = new UsuarioModel($pdo);
    }

    public function listar() {
        $usuarios = $this->usuarioModel->buscarTodos();
        include_once 'C:/Turma1/xampp/htdocs/MVC/View/Usuario/listar.php';
        return;
} 

    public function cadastrar($nome, $email, $senha) {
       return $this->usuarioModel->cadastrar($nome, $email, $senha);

    }

    public function editar($nome, $email, $senha, $id) {
        return $this->usuarioModel->editar($nome, $email, $senha, $id);
    }

    public function buscarUsuario($id) {
        $usuario = $this->usuarioModel->buscarUsuario($id);
        return $usuario;}


    public function deletar($id) {
        $usuario= $this-> usuarioModel -> deletar ($id);
        return $usuario;
    }
}
?>