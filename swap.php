<?php
$x = $_GET['n1'];
$y = $_GET['n2'];

echo "x: ".$x ."<br>";
echo "y: ".$y ."<br>";
$x=$x+$y;
//echo "x: ".$x."<br>";
echo "<br>";
$y =$x-$y;
echo "y: ".$y."<br>";

$x=$x-$y;
echo "x: ".$x."<br>";

?>