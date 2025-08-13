<?php
// regular expressions - it is used as a search pattern. it searches all types of text and also does text replace opreations. it can be a single character patten or can be more complicated too.
// in php a regular expression consist of a delimeter like '/' a pattern and optinal modifiers. example below.

$str = "/hello/i"; # here '/' is a delimeter, hello is pattern and i is a modifier. regular expression is a string.

// preg_match() it is a function that tells whether a string contains matches of the pattern or not.
$example = "hey there, I'm Piyush Pawar.";
$example2 = "The rain in SPAIN falls mainly on the plains.";
$str1 = "/hey/i";
$str2 = "/ain/i";
echo preg_match($str1, $example);

echo preg_match_all($str2, $example2); # to search all the occurances.
// preg_replace() is used for replacing the text in hte string without using another string.
echo preg_replace($str1,"hello" , $example);

// modifiers can change how the search is performed.
// i	Performs a case-insensitive search	
// m	Performs a multiline search (patterns that search for a match at the beginning or end of a string will now match the beginning or end of each line)	
// u	Enables correct matching of UTF-8 encoded patterns
?>