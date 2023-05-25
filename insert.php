<?php
include 'jq.php';
if(isset($_POST["insert"]))
{
    $name=$_POST["name"];
    $password=$_POST["password"];
    $sql="insert into person values('$name','$password')";
    $qr=mysqli_query($con,$sql);
    if($qr!=true)
    {
        echo" not inserted";
    }
    
}


if(isset($_POST['select']))
{
    $qr="select * from person";

    $r = $con->query($qr);
    if($r->num_rows>0)
    {
          while($row=$r->fetch_assoc())
          {
            echo $row["name"]." ".$row["password"]."<br>";
          }
    }
    else
    {
        echo "not select";
    }
}


if(isset($_POST['Delete']))
{
    $s=$_POST['name'];
    $qry="delete from person where name='$s'";
    $sql=mysqli_query($con,$qry);
    if($sql==TRUE)
    {
        echo"row deleted";

    }
    else
    {
        echo"not delete";
    }
}




if(isset($_POST['update']))
{
    if($name=$_POST['name'] and $password=$_POST['password'])
    {
        $update="UPDATE person set password='$password' where name='$name'";

         $up=mysqli_query($con, $update);
         if($up!=true)
         {
             echo" not up";
         }
         else{
             echo "data up!";
         }
         }
}

?>