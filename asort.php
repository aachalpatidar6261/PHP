<?php
echo "Sort an associative array in ascending order, according to the value:"."<br>";
$ar = array("d"=>1, "e"=>2,"c"=>3, "a"=>5);
asort($ar);
foreach($ar as $k=>$val)
{
	echo $k . " = " .$val;
	echo "<br>";
}

?>