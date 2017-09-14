<?php

/*
 * Criando a conexão com o BD
 */
$conn = new PDO("mysql:host=localhost;dbname=projeto_final", "root", "season");

/*
 * Criação do comando SQL (STMT $stmt)
 */
$stmt = $conn->prepare("SELECT * FROM grupos");

/*
 * Instrução SQL do com injeção de valores
 */
$stmt = $conn->prepare("INSERT INTO grupos (nome, slug) VALUES (?, ?)");
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $slug);

/*
 * Execução do SQL, execute. Retorna um valor boleano se a operação foi um sucesso
 */
$stmt->execute();

/*
 * Erros do comando SQL. Os valores são passados em um array
 */
$array = $stmt->errorInfo();
