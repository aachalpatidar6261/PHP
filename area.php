<?php
function area(){	
	echo "area of circle". 3.14*$r*$r;
 // echo "area of triangle". 1/2*$L*$B;
 // echo "area of Rectangle". $L*$B;
 // echo "area of suqare". $a*$a;


}

$r = $_GET['r'];
//$L = $_GET['L'];
//$B = $_GET['B'];
//$a = $_GET['a'];

area();
?>

