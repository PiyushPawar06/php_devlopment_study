<?php
// php math funtions
echo(pi()); # gives the values of pi

echo (min(1,224,65477,5688,34,2,-12131314)); # tells the min of the arguments in this list
echo (max(1,224,65477,5688,34,2,-12131314)); # tells the max of the arguments in this list
echo (abs(-12131314)); # gives the absoulte positive number as a output

echo (sqrt(16)); # gives the square root of the number as a output

echo (round(16.646)); # gives the the closest round figure number as a output

echo (rand(1,9)); # selects random number from the given range 

// php constants 

define("student","Piyush"); # this is a constant that is global in the entire script. once defined it cannot be changed or modified unlike variables.
echo student ;

define ("bikes",["bmw","Triumph","honda","ducati"]); # we can also define an array as a constant.
echo bikes[2] ;

const MYBIKE = "Trimuph speed 400"; # this is const which cannot be created another block scope unlike define which can be created inside a block scope if needed.
// also by using the const keyword the constant becomes case sensetive. 
echo MYBIKE;

function bikes_collection() {
    echo bikes[3]; # there in an function the global constant can be called as per requirement.
}
bikes_collection();

// magic constants  : these constants are called magic constants because they change values based on where they are used and has double underscore before and after the keyword. there are in total 9 magic constant.
// magic constants are case sensetive meaning __line__ is same as __LINE__ . 
// __CLASS__, __DIR__, __FILE__, __FUNCTION__, __LINE__, __METHOD__, __NAMESPACE__, __TRAIT__, ClassName::class
?>