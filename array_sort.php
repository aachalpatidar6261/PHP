<?php
$arr=array(9,11,7,4,33,2,1);
rsort($arr);
for($i=0;$i<count($arr);$i++)
{
	echo $arr[$i];
	echo "<br>";
}
?>