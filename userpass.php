<?php
include 'conf.php';
$user =$_GET['n5'];
$pass =$_GET['n6'];

$sql="select * from reg_table where 
username = $user AND password=$pass";
$qr=mysqli_query($con,$sql);

echo $qr;
if(mysqli_num_rows > 0) // check this num_rows key 
{
echo "submit";
}
else 
{
	echo "error";
}
?>