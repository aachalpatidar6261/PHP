<?php
// three_compare
$a = $_GET['n1'];
$b = $_GET['n2'];
$c = $_GET['n3'];

if($a>$b && $a>$c)
{
echo "a is greater than  b and c";
}
elseif($b>$a && $b>$c )
{
echo "b is greater than a and b";
}
else 
{
	echo "c is greater than a and b";
}
?>