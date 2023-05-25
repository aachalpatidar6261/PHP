<?php
$dp_host="localhost";
$db_user="root";
$db_password="";
$db_name="logdb";
//create connection
$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

//check connection
if(!$conn)
{
	echo "failed connect";
}
else
{
	echo "pass connection";
}
?>