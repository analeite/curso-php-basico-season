<?php

$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];

define("MEDIA", 7);

$media = ($nota1 + $nota2) / 2;

$resultado = ($media >= MEDIA) ? "Aluno aprovado": "Aluno reprovado";

echo $resultado;