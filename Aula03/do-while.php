<?php

$i = 101; //vai executar apenas uma vez, mostrando o 101, pois ao entrar na condição, verá que não
//atende os requisitos (101 é maior que 100

do{
    echo $i . "<br>";
    $i++;
    
}while($i <= 100);