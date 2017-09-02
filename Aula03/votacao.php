<?php

//$nome = $_GET["nome"];
//$idade = (int) $_GET["idade"];

/*if(!isset($_GET["nome"])){
    $nome = $_GET["nome"];
}else{
    $nome = "";
}

if(!isset($_GET["idade"])){
    $idade = (int) $_GET["idade"];
}else{
    $idade = 0;
}
*/
//$resultado = (($idade >= 18) && ($idade <= 65))? "É obrigado a votar." : "Não é obrigado a votar.";

$nome = $_GET["nome"] ?? " ";
$idade = (int) ($_GET["idade"] ?? 0);

if(($idade >= 18) && ($idade <= 65)){
    echo "É obrigado a votar.";
}else if(($idade >= 16 && $idade <= 18) || ($idade > 65)){
        echo "O voto é opcional.";
    }else{
        echo "Não pode votar.";
        
    }

//echo $resultado;

