<?php

/*
 * em java, para declarar um array, seria assim:
 * int [] numeros = new int[4];
 * numeros[0] = 2;
 * numeros [3] = 4;
 * numeros [4] = 5; => aqui daria erro
 */

//array em php
$numeros = array();
$numeros [0] = 2;
$numeros [3] = 4;
$numeros [4] = 5;

echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';

$numeros = array();
$numeros [] = 2; //irá colocar 2 na primeira posição livre que tiver no array 
$numeros [] = 4;
$numeros [] = 5;
        
echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';

$numeros = array (2, 4, 5);

echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';

$numeros = array(0 => 2, 1 => 4, 2 => 5);

echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';

$valores [0] = 3;

echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';

$usuario = array(
    "Nome" => "Ana Beatriz",
    "Idade" => 21,
    "Sobrenome" => "Araujo"
    
);

echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';

$numeros = array(
    1,
    3,
    'nome' => 'Leonardo',
);

echo '<pre>';
print_r($numeros);
echo '</pre>';
echo '<br><br>';

$databaseConfig = include('config.php');

echo '<pre>';
print_r($databaseConfig);
echo '</pre>';
echo '<br><br>';

$matriz = array(
    array(5, 7, 1), //0
    array(8, 2, 3), //1
    array(1, 2, 3), //2
    //    0  1  2
);

echo $matriz [1][0]; // linha e depois coluna

echo '<pre>';
print_r($matriz);
echo '</pre>';
echo '<br><br>';

$matriz [0][1] = 11;

echo '<pre>';
print_r($matriz);
echo '</pre>';
echo '<br><br>';


$linguagens = array("PHP", "Java", "C#");

//var_dump(array_key_exists(0,$linguagens)); //0, 1 e 2 serão verdadeiros, 3 retornará false

$usuario = array(
    'nome' => 'Ana',
    'sobrenome' => 'Leite',
    'idade' => 21,
);

$usuario['altura'] = 1.70;

//var_dump(array_key_exists('altura', $usuario));
echo '<br><br>';

//unset irá tirar o idade e o var dump falará que é falso
//unset($usuario['idade']);

var_dump(array_key_exists('idade', $usuario));
echo '<br><br>';

//unset tirar o idade depois do var dump falar que ele existe
//unset($usuario['idade']);


//count
$usuario = array(
    'nome' => 'Ana',
    'sobrenome' => 'Leite',
    'idade' => 21,
);

var_dump(count($usuario));
echo '<br><br>';


//array_search
$usuario = array(
    'nome' => 'Ana',
    'sobrenome' => 'Leite',
    'idade' => 21,
);

var_dump(array_search('Ana', $usuario));
echo '<br><br>';

$numeros = array(1,2,5,7);
var_dump(array_search('Ana', $usuario));
echo '<br><br>';