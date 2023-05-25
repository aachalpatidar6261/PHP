<?php
include 'jq.php';
if(isset($_POST["insert"]))
{
    $name=$_POST["name"];
    $password=$_POST["password"];
    $sql="insert into person stu_tbl values('$name','$password')";
    $qr=mysqli_query($con,$sql);
    if($qr==true)
    {
        echo" inserted"."<br>";

    }
    else
    {
        echo "not insert"."<br>";
    }
    
}


?>