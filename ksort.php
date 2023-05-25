<?php
$arr=array("C"=>"19","D"=>"20","E"=>"17","A"=>"18");
echo "before sorting array:"."<br>";
foreach($arr as $k=>$v)
{
	echo "keys is : ".$k." "."Value is :".$v."<br>";
}
echo "After sorting array:"."<br>";
arsort($arr);
foreach($arr as $k=>$v)
{
	echo "keys is : ".$k." "."Value is :".$v."<br>";
}
?>