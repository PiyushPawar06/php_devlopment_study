<?php
function MyName() {
    echo "my name is piyush";
}
MyName();

// function with arguments
function user($name, $age){
    echo "hello my name is $name, I'm $age years of age. \n";

}
user("Piyush","24 ");
user("Aryan","23 ");
user("Vishwa","24 ");

// function with default argument
function salary($default_salary = "50000rs"){
    echo "$default_salary ceredited \n";
}

salary("55000rs");
salary("60000rs");
salary() ;

// function with a return value

function addition($x, $y){
    $z = $x + $y;
    return $z;
}

echo addition(10,10);

// function in which there is reference value called

function sub(&$value){
    $value+=5;
}

$x = 10;
sub($x);
echo $x;

function sum(... $n){
    for ($n=0; $n<=10; $n++){
        echo "value is $n \n";
    }
}
sum(1,2,3,4,5,6,7,8,9,10,11)
?>
