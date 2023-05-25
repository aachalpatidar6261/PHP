<?php
include 'jq.php';
$i =$_GET['n1'];
$n =$_GET['n2'];
$u =$_GET['n3'];
$p =$_GET['n4'];

$sql="INSERT INTO sub values('".$i."','".$n."','".$u."','".$p."')";
$qr=mysqli_query($con,$sql);
echo $qr;
if (isset($_GET['submit'])) {
    if($qr == True)
{
echo "new record";
}# code...
}

$sel = "select * from sub";
echo "$sel";

?>