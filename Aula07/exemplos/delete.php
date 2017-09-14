<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=projeto_final", "root", "season");
    $conn->exec("set names utf8");
} catch (PDOException $e) {
    echo "Erro de conexão: $e";
    exit();
}

$id = 5;

$stmt = $conn->prepare("DELETE FROM grupos WHERE id=?");
$stmt->bindParam(1, $id);

if($stmt->execute()){
    echo "Sucesso";
}else{
    echo implode(",", $stmt->errorInfo());
}