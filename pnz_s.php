<?php
$num = $_GET['n1'];
switch ($num%2==0) {
case 1:
echo "even";
break;

case 0:
if ($num%2!=0){
echo "odd";
}
 break;
}
?>
