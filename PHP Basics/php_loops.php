<?php
// // while loop

// $a = 1;
// while ($a <= 3) {
//     echo "correct \n";
//     $a++;

// }

// while ($a < 6) {
//     if ($a == 3) break;
//         // echo "stopped at 3 \n";
//     echo $a;
//     $a++;
//     // continue;
//     // if ($a == 5) break;

// }

// while ($a < 6) {
//     $a++;
//     if ($a == 3) continue;
//     echo $a;
// }

// do-while - this will execute atleast once even if the condition is false. 
$b = 8;
do {
    echo $b;
    $b++;

}
while ($b < 6);  

// for loop

// for ($i = 1; $i < 5; $i++) {
//     echo "\n the number is $i";
// } 

// for($i = 0; $i <=10; $i++) {
//     if ($i == 9)
//         break;
//     echo "\n the number is $i";
// }

for($i = 0; $i <=10; $i++) {
    if ($i == 9)
        continue;
    echo "\n the number is $i";
}

// foreach
$colors = array("purple","brown","red","black","white","blue");

foreach($colors as $color){
    echo "the color is $color \n";

}

$students = array("piyush"=>1, "aryan"=>2, "vishwa"=>3);

foreach($students as $x=>$y){ # for array 
    echo "$x : $y \n";
}
?>