<?php

$float = round(6.5); //7
$float = round(6.4); //6
$float = round(6.44, 1); //6.4
$float = round(6.45, 1); //6.5

$float = round(6.45, 1, PHP_ROUND_HALF_DOWN); //6.4
////só arredonda quando o segundo número depois da vírgula for 5


echo $float.'<br>';
