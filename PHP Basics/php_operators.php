<?php
// operators are used to perform various opreartions on variables and values. these are divided into 8 different categories.
$x = 10;
$y = 2;
// 1. arithmatic operators
echo $x + $y; #addition
echo $x - $y; #subtraction
echo $x / $y; #division
echo $x * $y; #multiplication 
echo $x % $y; #modulus
echo $x ** $y; #exponentiation

// 2. assignment operators
$p = 20; # equals to sign is an assignment operator.
echo $p;
echo $p += 10; #addition
echo $p -= 10; #subtraction
echo $p *= 10; #multiplication
echo $p /= 10; #division
echo $p %= 10; #modulus

// 3. comparsion operators - used to compare two values
$a = 10;
$b = 12;

var_dump( $a== $b); # are equal
var_dump( $a === $b); # are identical
var_dump( $a != $b); # are not equal (can use <> also)
var_dump( $a !== $b); # are not identical
var_dump( $a > $b); # greater than
var_dump( $a < $b); # less than
var_dump( $a >= $b); # greater than equal to
var_dump( $a <= $b); # less than equal to
var_dump( $a <=> $b); # spaceship

// 4. increment-decrement operators

$q = 10;

echo ++$q; #pre increment
echo $q++; #post increment 
echo --$q; #pre decrement
echo $q--; #post decrement

// 5. logic operators - used mostly in loops
// and / && - both conditions should be true
// or / || - one of the conditions is true
// ! (not) - negation
// xor - True if either $x or $y is true, but not both

// 6. string operators - specailly designed for strings
$name = "Piyush";
$surname = "Pawar";
echo $name . $surname; #concatination
$name .= $surname; #concatination assignment
echo $name ;

// 7. Array operators
$arr1 = array("a" => 1,"b" => 2);
$arr2 = array("c" => 3,"d" => 4); 

print_r($arr1 + $arr2) ; #union
var_dump($arr1 == $arr2) ; #equality
var_dump($arr1 === $arr2) ; #identity
var_dump($arr1 != $arr2) ; #inequality (<> can also be used)
var_dump($arr1 !== $arr2) ; #non-identity

// 8. conditional assignment operators
// ?: - ternary 
// ?? - null coalescing

?>