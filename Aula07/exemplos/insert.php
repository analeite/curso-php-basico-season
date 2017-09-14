<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=projeto_final", "root", "season");
    $conn->exec("set names utf8");
} catch (PDOException $e) {
    echo "Erro de conexão: $e";
    exit();
}

$nome = "Gerência";
$slug = "ge";

//$stmt = $conn->prepare("INSERT INTO grupos (nome, slug) VALUES (:nome, :slug)");
//$stmt->bindParam('nome', $nome); //injeta valores na coluna e evita injeção de dados indesejados
//$stmt->bindParam('slug', $slug); //injeta valores na coluna e evita injeção de dados indesejados

$stmt = $conn->prepare("INSERT INTO grupos (nome, slug) VALUES (?, ?)");
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $slug);

if ($stmt->execute()) {
    echo "Sucesso";
}else{
    var_dump(implode(",",$stmt->errorInfo()));
}
