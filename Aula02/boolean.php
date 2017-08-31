<?php

//conversão de inteiro para boolean
$variavel = 0; //false
$variavel = -1; //true

//conversão de string para boolean
$variavel = ""; //false
$variavel = "0"; //false
$variavel = " "; //true

//conversão de array para boolean
$variavel = array(); // false
$variavel = array(1); //true

//conversão de null para boolean
$variavel = NULL; //false

$boolean = (bool) $variavel;
echo "A conversão de integer para boolean é ";
var_dump($boolean);
echo "<br><br>";