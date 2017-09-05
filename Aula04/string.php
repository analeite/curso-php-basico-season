<?php

//Uma alternativa seria: $nome = issue($_GET["nome"]) ? $_GET["nome"] : "";
$nome = $_GET["nome"] ?? "";

session_start();

//$_SESSION["errors"] = array();
if($nome != "Ana"){
    $_SESSION["errors"][] = ("O nome $nome não é igual a Ana!");
    //header("Location: http://localhost/Aula04/index.php");
}

$idade = $_GET["idade"] ?? "";

if($idade == NULL){
    $_SESSION["errors"][] = ("Idade inválida!");
    
}

if(!isset($_SESSION['errors'])){
    $_SESSION['success'] = "Validação realizada com sucesso!";
}
header("Location: http://localhost/Aula04/");
