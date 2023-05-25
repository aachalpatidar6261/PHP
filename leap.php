<?php
$leap =$_GET['leap'];
if($leap%400==0 or $leap%4==0){
	echo "IT IS LEAP YEAR";
}
else{
	echo "IT IS NOT LEAP YEAR";
}
?>
