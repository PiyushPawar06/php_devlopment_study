<?php
// arrays - used to store multiple variables in a single variable
// can store numbers, strings, functions, arrarys, objects.
function myfunc(){
    echo "hello";
}
$my_arr = array(1,"John",[1,2,3,4,5],myfunc());


// indexed  arrays
$cars = array("BMW","Honda","RR");
echo $cars[0]; #first element is index 0 

$cars[1] = "Mercedes";
var_dump( $cars );
array_push($cars,"Audi"); #to add value in array 
var_dump( $cars );

// associative array - like key:value pair in python its similar to it but in array format.
$bikes = array(1=>"BMW", 2=>"Triumph", 3=>"RF", 4=>"Kawasaki");
var_dump( $bikes[2] ); # get value by key
$bikes[3] = "Ducati";
var_dump( $bikes );

foreach ($bikes as $x=>$y){
    echo "$x : $y \n"; #looping through an array
}

// create array
$students = ["Piyush", "Aryan", "Vishwa", "Atharv"]; # alternate way to create an array
var_dump( $students );

function myFunction() {
  echo "I come from a function!";
}

// $myArr = array("Volvo", 15, myFunction);

// $myArr[2]();
$receipe = ["butter","chicken","spices"];
array_splice($receipe,1,1); # to remove the item from array and it will reindex the array
unset($receipe[0]); # this will also delete the item from the array but will not reindex. ot will keep that index empty with a gap
var_dump( $receipe );

$food =[1=>"milk", 2=>"chicken", 3=>"eggs"];
$food1 = array_diff($food, ["eggs"]);
var_dump($food1);
array_pop($food); # to remove the last item
var_dump( $food);
array_shift( $food1 ); # to remove the first item from the array
var_dump( $food1 ); 

// sorting in array

$teachers = ["maths", "english", "history", "marathi", "science"];
$schools = ["pune"=>1, "solapur"=>2, "mumbai"=>3];

sort($teachers); # ascending sorting
var_dump( $teachers );
rsort($teachers); # descending sorting
var_dump( $teachers );

asort($schools); # ascending sorting on the basis of values 
var_dump( $schools);

ksort($schools); # descending sorting on the basis of keys
var_dump( $schools);

arsort($schools); #reverse ascending sorting on the basis of values 
var_dump( $schools );

krsort($schools); #reverse descending sorting on the basis of keys
var_dump( $schools );

// multidimensional array 

$multi_arr = [[1,2], [3,4], [5,6]];
var_dump($multi_arr)

// array functions - there are 15+ functions refere to them accordingly when required.
?>