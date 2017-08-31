<?php


$array = array();
$array [] = 1;
$array [] = 10;
//$array = array(0 => 1, 1 => 10);

echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br><br>";

echo"A posição 0 do array é " . $array[0]. "<br>";
echo"A posição 1 do array é " . $array[1]. "<br>";

//atribuição do array na inicialização
$array = array(1,10);
$array [5] = 5;

echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br><br>";

echo"A posição 0 do array é " . $array[0]. "<br>";
echo"A posição 1 do array é " . $array[1]. "<br>";
echo"A posição 5 do array é " . $array[5]. "<br>";

//inicialização do array a partir do indice 6
$array [6] = 6;
$array [] = 7;
$array [50] = 6;
$array [] = 51;


echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br><br>";

//echo"A posição 6 do array é " . $array[6]. "<br>";

//dicionários
$array = array("livro" => 4, "Autora" => "Ana");
$array [] = 5;
$array["paginas"] = 55;

echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br><br>";

echo "A autora do livro é " . $array["Autora"];