<?php
$num = $_GET['n1'];
echo $num."<br>";
$rev =0;
while($num != 0)
{
$rem =$num%10;

$rev =$rev*10+$rem;
$num=$num/10;
}
echo $rev;
?>