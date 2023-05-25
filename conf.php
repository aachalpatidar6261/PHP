<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname="logdb";
$con=mysqli_connect($server,$username,
                    $password,$dbname);
if(!$con)
{
   echo "not connect..";
}
else 
{
	echo "success!!!";
}
?>