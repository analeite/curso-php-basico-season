<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once ('usuarios-dao.php');
require_once ('usuarios-validation.php');

$usuario = $_POST['usuario'];
$id = (int) ($_GET['id'] ?? 0);

$action = $_GET['action'];

if ($action == 'store') {
    validarNome($usuario['nome']);

    if (existeErro()) {
        header("Location: http://localhost/ProjetoFinal/usuarios/criar-form.php");
    } elseif (!store($usuario)) {
        store($usuario);
        header("Location: http://localhost/ProjetoFinal/usuarios/criar-form.php");
    } else {
        success("O usuário " . $usuario['nome'] . " foi cadastrado com sucesso");
        header("Location: http://localhost/ProjetoFinal/usuarios/");
    }
} elseif ($action == 'destroy') {
    destroy($id);

    success("Usuário deletado com sucesso!");
    header("Location: http://localhost/ProjetoFinal/usuarios");
}
