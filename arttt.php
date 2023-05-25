<?php
$a = $_GET['n1'];
$b = $_GET['n2'];
$op = $_GET['op'];
switch($op){
case 1:
$r = $a+$b;
echo " Addition = ".$r ;
break;
case 2:
$r = $a-$b;
echo " Subtraction = ".$r ;
break;
case 3:
$r = $a*$b;
echo " Multiplication = ".$r ;
break;
case 4:
$r = $a/$b;
echo " Divison = ".$r ;
break;
default:
echo ("invalid option\n");
}
?>
