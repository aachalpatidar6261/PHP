<?php   //table 
$num = $_GET['n1'];  
for($i=1; $i<=10; $i++)   
{
$p= $i*$num;
echo "$num * $i = $p";   
echo '<br>';	 
}  
?> 