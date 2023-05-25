<?php
$a = $_GET['n1'];
$rev = 0;

while($a >1)
 {
 $rem = $a%10;
 $rev = ($rev*10)+$rem;
 $a = ($a/10);
 }
echo "the reverse number is : $rev";
?>