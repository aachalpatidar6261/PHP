<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname="jquery";
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

$sql ="SELECT * FROM `sub`";
$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);
echo $num;
echo "</br>";

if ($num > 0)
{
     $row = mysqli_fetch_assoc($result);
     echo var_dump($result)

echo "</br>";
}

?>