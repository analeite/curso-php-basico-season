<?php

if(isset($_COOKIE['acessos'])){
    $acessos = $_COOKIE['acessos'] + 1; 
}else{
    $acessos = 1;
}

setcookie('acessos', $acessos, time() + 60 * 60 * 24); //esse cookie durará por um dia

echo $acessos;
