<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname="jquery";

$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
   echo "not connect..";
}
else 
{
	echo "success!!!";
}

if (isset($_GET['submit'])) {
    if($qr == True)
{
echo "new record";
}


?>