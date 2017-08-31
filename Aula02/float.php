<?php

//conversão de integer 
$integer = 10;

$float = (float) $integer;
$float = floatval ($integer);

echo "A conversão de inteiro para float é $float <br>";

//conversão de boolean
$boolean = false;
$boolean = true;
$float = (float)$boolean; 

echo "A conversão de boolean para float é $float <br>";

//conversão de string
$string = "texto"; //resultado = 0
$string = "1.2texto"; // resultado = 1.2
$string = "1.3e4"; // resultado = 13000 é o mesmo que: 1.3 *(10**4)

$float = (float) $string;
echo "A conversão de string para float é $float <br>";