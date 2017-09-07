<?php

//Uma alternativa seria: $nome = issue($_GET["nome"]) ? $_GET["nome"] : "";
$nome = $_POST["nome"] ?? "";
$linguagem = $_POST['linguagem'] ?? '';
$conhecimento = (bool) ($_POST['conhecimento'] ?? '');
$php = $_POST['php'] ?? '';
$endereco = $_POST['endereco'] ?? array();

echo '<pre>';
print_r($endereco);
echo '</pre>';
exit();

session_start();
require_once('functions.php');

validacaoTamanhoNomeUtf8($nome);


validadoComSucesso("Validação realizada com sucesso! Parabéns, Ana!");

header("Location: http://localhost/Aula05/");
