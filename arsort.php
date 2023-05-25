<?php
echo "asort an associative array in descending order, according to the value:"."<br>";

$ar = array("d"=>1, "e"=>2,"c"=>3, "a"=>5);
arsort($ar);
foreach($ar as $k=>$val)
{
	echo $k . " = " .$val;
	echo "<br>";
}

?>