<?php
    $var = "first php"; # these are global variables and can be used only outside the function, to access them inside the function use the word global
    $var_num = 1;
    $var_num_2 = 3;
    $var_2 = $var3 = "hello";
    echo "this is my $var code!";
    echo "$var_2 $var3";
    var_dump($var);

    function mytest() {
        static $var = 0; #static is used to access the variable as many times as needed because it is not deleted after function is executed
        $local_var = "this is local variable"; # can be only accesessed in this function as it is a local variable.
        global $var_num, $var_num_2;
        echo $var_num + $var_num_2 ;
        echo $var;
        echo $local_var;
        $var++;
    }
mytest();
mytest();
mytest();

?>
<?php
echo "<h2>this is sub-heading</h2>" 
?>

<!-- Data Types in PHP -->
 <?php
$a = 1 ;//int
$b = "hey" ; //str
$c = 1.22 ;//float
$d = True ;//boolean
$e =array("student", "teacher") ;//array
$f = null ;//null

var_dump($a,$b, $c, $d, $e) ;

// below is how you can convert a data type to another data type. this is known as casting.
$exam = 6;
$exam = (string) $exam;
var_dump($exam);

// in string double quotes process special characters  but single quotes doesn't. 


 ?>
<?php 
// strings 

$hi = "hello world!";
echo $hi ;
echo str_word_count($hi); #tells word count  
echo strlen($hi) ; # tells length of the string
echo strpos($hi, "world") ; # tells thee position of the text i the string

//string functionalities

// string modification 
echo strtoupper($hi) ; # upper case
echo strtolower($hi) ; # lower case
echo str_replace("world", "everyone", $hi) ; # to replace the specific text
echo strrev($hi) ; # to reverse the string
echo trim($hi) ; # to remove white spaces its helpful in html 
$new = explode(" w", $hi) ; # converts the string into array by using a separator, the separator is vanished though. 
print_r($new); # prints the output in readable form

// string concatenation
$x = "hello";
$y = "world";

echo $x ." ". $y ; # . opreator is used to concate the strings 
$z = "$x $y" ;
echo $z ;

// string slicing
$new_ex = "Hello guys";
echo substr($new_ex,5,5);
echo substr($new_ex,5);
echo substr($new_ex,-5, 3); # reverse slicing. index starts from -1
echo substr($new_ex,5,-3); # to omit the unwanted part

// escape characters
$vikings = "The \"vikings\" belong to neatherlands" # use \ to add the term which is illegal in the strings

?>