<?php
include 'jq.php';
$name =$_GET['name'];
$password =$_GET['password'];

$sql="insert into std(name,password) 
values('$name','$password')";
$qr=mysqli_query($con,$sql);
echo $qr;
if($qr == True)
{
    echo "new record";
}
else
{
    echo "error";
}
?>