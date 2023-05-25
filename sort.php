<?php
$numbers = array(4, 6, 2, 22, 11);
$size=count($numbers);
sort($numbers);
for($i=0;$i<$size;$i++)
{
	echo $numbers[$i],"<br>";
	
}

$num = array(4, 6, 2, 22, 11);

rsort($num);
for($i=0; $i<$size  ;$i++)
{
	echo $num[$i],"<br>";
}

?>
