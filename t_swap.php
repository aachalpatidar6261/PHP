<?php
$a = $_GET['n1'];
$b = $_GET['n2'];

echo "a : ".$a;
echo "<br>";
echo "b : ".$b;
echo "<br>";
$c=$a;
//echo "c=a: ,c = ".$c."<br>";
$a=$b;
echo "a : ".$a."<br>";
$b=$c;
echo "b : ".$b."<br>";
?>