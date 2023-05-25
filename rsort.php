<?php
echo "Sort the elements of the $num array in ascending alphabetical order:";
$num = array(4, 6, 2, 22, 11);
rsort($num);
for($i=0; $i<count($num)  ;$i++)
{
	echo $num[$i],"<br>";
}
?>
