<?php
/*
The array_sum() function, returns the sum of the values in an array. 
The returned value can be integer or float. It returns 0 if the array is empty.
*/

$ar = array(10,20,30,40,30);
echo array_sum($ar);
echo "<br>";
$arr = array("a"=>29.8,"b"=>66.4);
echo array_sum($arr);
?>