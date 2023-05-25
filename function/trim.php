<?php
/*
The trim() function removes whitespace and other predefined characters from both sides 
of a string("He" in "Hello" and "d!" in "World"):

ltrim() - Removes whitespace or other predefined characters from the left side of a string
rtrim() - Removes whitespace or other predefined characters from the right side of a string

*/

$str = "hello world<br>";
echo $str;
echo ltrim($str,"he");
echo rtrim($str,"ld");
?>