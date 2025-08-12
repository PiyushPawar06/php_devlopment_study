<?php
$a = 5;
$b = 5;
if ($a + $b == 10) {
    echo "Correct";
}
if ($a == 5 && $b == 10) {
    echo " correct";
} 
elseif ($a == 5 && $b == 5) { 
    echo "maybe";
}
else {
    echo "incorrect";
}

// shorthand if
$p = 5;
if ($p <= 5) $b = "hello";
echo $b;

// short hand if-else
$y = 5;
$x = $y <= 4 ? "hello" : "bye";
echo $x;

// nested if 
$boy = 10;
$girl = 12;
if ($girl <= 12) {
    if ($boy == 11){
        echo "\n he has 10 rupees";
    } 
    else { 
        echo "\n boy lost 10 rupees";
    }
}
?>