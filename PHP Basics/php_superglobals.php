<?php
// superglobals - can be accessed from anywhere be it function, file or global variable
// 1. $GLOBALS

$x = 1;
function myfunc(){
    echo $GLOBALS["x"]; # global variable called in a function using globals , can use the keyword global as well
    $GLOBALS["y"] = 2;

}

myfunc();
echo $y; # local variable can be called outside the function using globals

// 2. $_SERVER - Holds info about headers, paths, location of the script
echo $_SERVER["PHP_SELF"]; # tells about the current file in which the php script is executing.
// there are many such $_SERVER elements. use them as per requirement.

// 3. $_REQUEST - stores form data like cookies and submitted form data. basically it is an array that contains data form $_GET, $_POST, $_COOKIE


?>

<html>
<body>

<form method="post" action="demo_request.php">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
$name = $_REQUEST["fname"];
echo $name;
?>
</body>

</html>
<?php
// 4. $_POST - HELPS WITH variables received from the HTTP POST method. example in superglobals.php

// 5. $_GET - helps with variables received from HTTP GET method. eaxmple in demo.php and in this file ie:- php_superglobals.php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="demo.php?subject=web&teacher=Piyush">TEST $GET</a>
</body>
</html>