<?php
include 'conf.php';
$i =$_GET['n1'];
$n =$_GET['n2'];
$u =$_GET['n3'];
$p =$_GET['n4'];

$sql="insert into reg(id,name,username,password) 
values('".$i."','".$n."','".$u."','".$p."')";
$qr=mysqli_query($con,$sql);
echo $qr;
if($qr == True)
{
echo "new record";
}
?>