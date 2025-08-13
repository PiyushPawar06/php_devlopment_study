<?php
// numbers in php
// 1. interger 
$num = 42353262352;
$num2 = 53468205.2;
var_dump(is_int($num)); # it checks whether the give variable is integer or not
var_dump(is_int($num2));

// 2. float
$num3 = 53468205.253465763; # checkes whether the give variable is integer or not
var_dump(is_float($num3));
var_dump(is_infinite($num3)); # checks whether the variable is infinite by checking the range that php allows for the float

// NaN
$num4 = acos(6);
var_dump(is_nan($num4)); #checks where the value is a number or not.    

$num5 = "hello";
$num6 = "2235345";
var_dump(is_numeric($num5)); # checks whether the given vairable is numeric string/number or not
var_dump(is_numeric($num6));

// casting 
$num7 = 124235.233532;
$int_cast = (int) $num7; # castes the given variable into int.
echo $int_cast;
var_dump($int_cast);

$num8 = "2520452";
$int_cast = (int) $num8;
echo $int_cast;

?>