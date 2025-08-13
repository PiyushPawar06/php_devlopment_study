<?php
$my_fav_color = "green";
switch ($my_fav_color) {
    case "red":
        echo "correct";
        break; # to break out of the  current case
    case "blue":
        echo "can be";
        break;
    default: # this executes when none of the cases gets a match 
        echo "none of the above";
        
}

$x = 6;

switch ($x) {
    case 1:
    case 2:
    case 3:
        echo "hello first 3 students";
        break;
    case 4:
    case 5:
        echo "hello 4th and 5th students";
        break;
    default:
        echo " \n where are the students";
}

?>