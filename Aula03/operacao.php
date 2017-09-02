<?php

$a = 1;
$b = 2;
$resultado = ($a > $b);

var_dump($resultado);

echo "<br><br>";

$a = 1;
$b = "1";

$resultado = ($a == $b);
echo "O valor A é igual ao B<br>";
var_dump($resultado);
echo "<br><br>";

$a = 1;
$b = "1";
$resultado = ($a === $b);
echo "O valor A não é identico a B<br>";
var_dump($resultado);
echo "<br><br>";

$a = 1;
$b = "1";
$resultado = ($a != $b);
echo "O valor de A não é diferente de B<br>";
var_dump($resultado);
echo "<br><br>";

$a = 1;
$b = "1";
$resultado = ($a !== $b);
echo "O valor A é igual mas não identico ao B<br>";
var_dump($resultado);
echo "<br><br>";
