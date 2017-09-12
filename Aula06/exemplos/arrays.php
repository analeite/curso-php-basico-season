<?php

$array = array (1, 2, 3, 4, 5);

/*
 * in_array
 */

var_dump(in_array(6, $array)); //false
echo '<br>';
var_dump(in_array(3, $array)); //true
echo '<br>';
/*
 * 
 */

var_dump(array_key_exists(0, $array)); //true
echo '<br>';
var_dump(array_key_exists(5, $array)); //false
echo '<br>';

/*
 * unset
 */
echo '<pre>';
print_r($array);
echo '</prep>';

unset($array[4]);

echo '<pre>';
print_r($array);
echo '</prep>';

/*
 * array_merge
 */

$array = array_merge($array, array(5,6,7,8));
echo '<pre>';
print_r($array);
echo '</prep>';