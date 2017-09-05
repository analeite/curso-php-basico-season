<?php

$nome = $_GET['nome'] ?? '';

/*
 * printf
 */

printf("%s tem %.2f de altura", "Ana Beatriz", 1.67);
echo '<br><br>';

/*
 * strlen
 */

/*
 * $novo = strlen("João");//5
*$novo = strlen(utf8_decode("João"));//4
*echo "<br>";
*var_dump($novo);
 * 
 */

/*
 * wordwrap
 */

//$novo = wordwrap($nome, 5, "<br>\n");
//var_dump($novo);

/*
 * trim
 */

//$novo = trim($nome);
//var_dump($novo);

/*
 * ltrim
 */

//$novo = ltrim($nome);
//var_dump($novo);

/*
 * rtrim
 */

//$novo = rtrim($nome);
//var_dump($novo);

/*
 * explode
 */

//$linguagem = "PHP-JAVA-Python";
//$novo = explode("-", $linguagem);
//var_dump($novo);

/*
 *str_split 
 */

//$linguagem = "PHP-JAVA-Python";
//$novo = str_split($linguagem,4);
//var_dump($novo);

/*
 * implode
 */
//$linguagens = array("Java", "PHP", "Python");
//$novo = implode(" - ", $linguagens);
//var_dump($novo);

/*
 * strpos
 */
//$frase = "Aprendendo PHP";
//$novo = strpos($frase, "PHP");
//$novo = stripos($frase, "php");//o i é de ignore, ele irá ignorar a caixa alta no texto a ser procurado
//var_dump($novo);

/*
 * substr
 */
//$texto = "Aprendendo PHP Básico";
//$novo = substr($texto, 2, 5);
//var_dump($novo);