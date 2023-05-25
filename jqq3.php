<?php
include 'jq.php';
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$username =$_POST["username"];
$password = $_POST["password"];
$subject=$_POST["subject"];
$sql="INSERT INTO sub($name,$username,$password,$subject) values('".$name."','".$username."','".$password."','".$subject."')";
$qr=mysqli_query($con,$sql);
if($qr==TRUE)
{
    echo"inserted";
}
}
if (isset($_POST["SELECT"])) 
{
   $name=$_POST["name"];
   $select = "select * from sub where Name='$name'";
    $result = $con->query(select);
    if ($result->num_rows>0)
    {
        if($row=$result->fetch_assoc())
        {
            echo $row["Email"]."<br>";
            echo $row["password"]."<br>";
        }
    }
}
?>